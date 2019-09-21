def pencocokan(listnya,stringnya):
	for ada in listnya:
		if ada in stringnya:
			print(ada," => true")
		else:
			print(ada," => false")

pencocokan(["aku","kamu","dia","bersama","selamanya"],"akukamudia")