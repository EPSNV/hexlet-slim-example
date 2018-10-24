JEKYLL_VERSION=3.6

m=add commit

push:
	git add .
	git commit -m '$(m)'
	git push
