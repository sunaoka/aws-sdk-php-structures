<?php

namespace Sunaoka\Aws\Structures\MediaStore\CreateContainer;

trait CreateContainerTrait
{
    /**
     * @param CreateContainerRequest $args
     * @return CreateContainerResponse
     */
    public function createContainer(CreateContainerRequest $args)
    {
        $result = parent::createContainer($args->toArray());
        return new CreateContainerResponse($result->toArray());
    }
}
