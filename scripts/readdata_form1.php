<?php 

	$myfile = fopen($NewFile, "r");
	$data = fgetcsv($myfile, 0, ";");
	$Site_Name = $data[0];
	$Comm_Work_Ord = $data[1];
	$Const_Work_Ord = $data[2];
	$EN_Proj_Num = $data[3];
	$Rev = $data[4];
	$Prep_By = $data[5];
	$Date1 = $data[6];
	$Street_Add = $data[7];
	$City = $data[8];
	$Lat = $data[9];
	$Long = $data[10];
	$Section = $data[11];
	$Township = $data[12];
	$Range = $data[13];
	$Division = $data[14];
	$County = $data[15];
	$Scope = $data[16];
	$ScopeB1 = $data[17];
	$ScopeB2 = $data[18];
	$ScopeB3 = $data[19];
	$ScopeB4 = $data[20];
	$ScopeB5 = $data[21];

	$Valve_1_VT = $data[22];
	$Valve_1_AC = $data[23];
	$Valve_1_Size = $data[24];
	$Valve_1_Man = $data[25];
	$Valve_1_Model = $data[26];
	$Valve_1_Serial = $data[27];
	$Valve_1_MDP = $data[28];
	$Valve_1_TR = $data[29];
	$Valve_1_MWS = $data[30];
	$Valve_1_BAM = $data[31];
	$Valve_1_PLMAOP = $data[32];
	$Valve_1_PLDP = $data[33];
	$Valve_1_Pipe_Grade = $data[34];
	$Valve_1_TS = $data[35];
	
	$Valve_2_VT = $data[36];
	$Valve_2_AC = $data[37];
	$Valve_2_Size = $data[38];
	$Valve_2_Man = $data[39];
	$Valve_2_Model = $data[40];
	$Valve_2_Serial = $data[41];
	$Valve_2_MDP = $data[42];
	$Valve_2_TR = $data[43];
	$Valve_2_MWS = $data[44];
	$Valve_2_BAM = $data[45];
	$Valve_2_PLMAOP = $data[46];
	$Valve_2_PLDP = $data[47];
	$Valve_2_Pipe_Grade = $data[48];
	$Valve_2_TS = $data[49];

	$Valve_3_VT = $data[50];
	$Valve_3_AC = $data[51];
	$Valve_3_Size = $data[52];
	$Valve_3_Man = $data[53];
	$Valve_3_Model = $data[54];
	$Valve_3_Serial = $data[55];
	$Valve_3_MDP = $data[56];
	$Valve_3_TR = $data[57];
	$Valve_3_MWS = $data[58];
	$Valve_3_BAM = $data[59];
	$Valve_3_PLMAOP = $data[60];
	$Valve_3_PLDP = $data[61];
	$Valve_3_Pipe_Grade = $data[62];
	$Valve_3_TS = $data[63];

	$Valve_4_VT = $data[64];
	$Valve_4_AC = $data[65];
	$Valve_4_Size = $data[66];
	$Valve_4_Man = $data[67];
	$Valve_4_Model = $data[68];
	$Valve_4_Serial = $data[69];
	$Valve_4_MDP = $data[70];
	$Valve_4_TR = $data[71];
	$Valve_4_MWS = $data[72];
	$Valve_4_BAM = $data[73];
	$Valve_4_PLMAOP = $data[74];
	$Valve_4_PLDP = $data[75];
	$Valve_4_Pipe_Grade = $data[76];
	$Valve_4_TS = $data[77];

	$Valve_5_VT = $data[78];
	$Valve_5_AC = $data[79];
	$Valve_5_Size = $data[80];
	$Valve_5_Man = $data[81];
	$Valve_5_Model = $data[82];
	$Valve_5_Serial = $data[83];
	$Valve_5_MDP = $data[84];
	$Valve_5_TR = $data[85];
	$Valve_5_MWS = $data[86];
	$Valve_5_BAM = $data[87];
	$Valve_5_PLMAOP = $data[88];
	$Valve_5_PLDP = $data[89];
	$Valve_5_Pipe_Grade = $data[90];
	$Valve_5_TS = $data[91];
	
	fclose($myfile);

?>