// Java Document
package popstar;

import java.util.Random;
import java.util.Scanner;

public class free {
	public  static void main(String args[]){
		Random inn=new Random();
		int pop[]= new int[7];
	for (int counter=1;counter<=1000;counter++) {
		++pop[1+inn.nextInt(6)];
	}

	System.out.println("face\tFrequency");
	for(int face=1; face<pop.length;face++) {
		System.out.println(face+"\t"+pop[face]);
	}
int popp=inn.nextInt(6);
System.out.println(popp);
	
	}

}
