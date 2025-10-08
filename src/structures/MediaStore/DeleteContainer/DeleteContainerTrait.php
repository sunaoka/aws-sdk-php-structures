<?php

namespace Sunaoka\Aws\Structures\MediaStore\DeleteContainer;

trait DeleteContainerTrait
{
    /**
     * @param DeleteContainerRequest $args
     * @return DeleteContainerResponse
     */
    public function deleteContainer(DeleteContainerRequest $args)
    {
        $result = parent::deleteContainer($args->toArray());
        return new DeleteContainerResponse($result->toArray());
    }
}
