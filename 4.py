def drawLine(kata):
	for _ in range(len(kata)):
		for __ in range(len(kata)):
			print(kata if __==_ else " ", end=' ')
		print("\r")

drawLine("LOVE")