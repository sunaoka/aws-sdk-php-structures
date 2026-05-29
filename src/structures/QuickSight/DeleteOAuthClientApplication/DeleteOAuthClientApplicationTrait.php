<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteOAuthClientApplication;

trait DeleteOAuthClientApplicationTrait
{
    /**
     * @param DeleteOAuthClientApplicationRequest $args
     * @return DeleteOAuthClientApplicationResponse
     */
    public function deleteOAuthClientApplication(DeleteOAuthClientApplicationRequest $args)
    {
        $result = parent::deleteOAuthClientApplication($args->toArray());
        return new DeleteOAuthClientApplicationResponse($result->toArray());
    }
}
