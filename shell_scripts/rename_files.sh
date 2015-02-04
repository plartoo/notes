count=0					# Initialise a counter
for img in $(ls *.bmp | sort -n)	# this will work, even if a few intermediate files are missing
do					# Begin the loop
    count=`expr $count + 1`		# Increment the counter
    mv "$img" "$count.bmp"		# Display the result
done					# End of loop

