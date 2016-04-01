include docker.mk

docker-machine-run:
	eval "$(docker-machine env default)"
