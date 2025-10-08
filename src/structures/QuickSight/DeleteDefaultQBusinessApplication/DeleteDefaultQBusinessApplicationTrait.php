<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteDefaultQBusinessApplication;

trait DeleteDefaultQBusinessApplicationTrait
{
    /**
     * @param DeleteDefaultQBusinessApplicationRequest $args
     * @return DeleteDefaultQBusinessApplicationResponse
     */
    public function deleteDefaultQBusinessApplication(DeleteDefaultQBusinessApplicationRequest $args)
    {
        $result = parent::deleteDefaultQBusinessApplication($args->toArray());
        return new DeleteDefaultQBusinessApplicationResponse($result->toArray());
    }
}
