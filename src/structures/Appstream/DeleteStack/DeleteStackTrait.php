<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteStack;

trait DeleteStackTrait
{
    /**
     * @param DeleteStackRequest $args
     * @return DeleteStackResponse
     */
    public function deleteStack(DeleteStackRequest $args)
    {
        $result = parent::deleteStack($args->toArray());
        return new DeleteStackResponse($result->toArray());
    }
}
