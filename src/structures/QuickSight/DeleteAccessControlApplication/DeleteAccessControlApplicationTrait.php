<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteAccessControlApplication;

trait DeleteAccessControlApplicationTrait
{
    /**
     * @param DeleteAccessControlApplicationRequest $args
     * @return DeleteAccessControlApplicationResponse
     */
    public function deleteAccessControlApplication(DeleteAccessControlApplicationRequest $args)
    {
        $result = parent::deleteAccessControlApplication($args->toArray());
        return new DeleteAccessControlApplicationResponse($result->toArray());
    }
}
