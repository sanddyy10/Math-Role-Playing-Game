import java.util.Scanner; 
// Java program to evaluate a given expression 

class GFG{ 
// A utility function to check if 
// a given character is operand 
static boolean isOperand(char c) 
{ 
	return (c >= '0' && c <= '9'); 
	
} 

// utility function to find value of and operand 
static int value(char c) 
{ 
	return (int)(c - '0'); 
	
} 

// This function evaluates simple expressions. 
// It returns -1 if the given 
// expression is invalid. 
static int evaluate(String exp) 
{ 
    
	int res = 0,num=0,j=0;
	exp = exp + ' ';
	// Base Case: Given expression is empty 
	if (exp.length() == 0) return -1; 
    for(j = 0; j<exp.length(); j++){
        char ch = exp.charAt(j); 
        if (isOperand(ch) == true){
		    num = num*10 + value(ch);
		}else{
		    res = num;
		    break;
		}
    }
	// The first character must be 
	// an operand, find its value  
    int turn = 1;
    num = 0;
	// Traverse the remaining characters in pairs 
	char prop = 'a';
	for (int i = j; i<exp.length(); i++) 
	{ 
	    
		// The next character must be an operator, and 
		// next to next an operand 
		char ch = exp.charAt(i); 

		// If next to next character is not an operand 
		if (isOperand(ch) == true){
		    num = num*10 + value(ch);
		    //System.out.println(num);
		}else{
		   if(prop != 'a'){
		       if (prop == '+') res += num; 
		else if (prop == '-') res -= num; 
		else if (prop == '*') res *= num; 
		else if (prop == '/') res /= num; 
		   }
		        if (ch == '+') prop = '+'; 
		else if (ch == '-') prop = '-'; 
		else if (ch == '*') prop = '*'; 
		else if (ch == '/') prop = '/'; 
		else if (ch == ' ') prop = 'a';
		// If not a valid operator 
		else				 return -1;
		 num=0;
		//System.out.println(res);
		}

		
	} 
	return res; 
} 

// Driver program to test above function 
public static void main(String[] args) 
{ 
    		String s; 
		Scanner sc = new Scanner(System.in);
 		s = sc.nextLine();
	String expr1 = s; 
	int res = evaluate(expr1); 
	if(res == -1) System.out.println(expr1+" is Invalid"); 
	else	 {
	    if(res == 120){
	        System.out.println("Value of string is 120"); 
	    }else{
	        System.out.println("Value of string is not 120");
	    }
	}
} 
} 
// This code is contributed by mits 
