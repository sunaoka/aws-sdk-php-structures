<?php

namespace Sunaoka\Aws\Structures\MediaStore\ListContainers;

trait ListContainersTrait
{
    /**
     * @param ListContainersRequest $args
     * @return ListContainersResponse
     */
    public function listContainers(ListContainersRequest $args)
    {
        $result = parent::listContainers($args->toArray());
        return new ListContainersResponse($result->toArray());
    }
}
