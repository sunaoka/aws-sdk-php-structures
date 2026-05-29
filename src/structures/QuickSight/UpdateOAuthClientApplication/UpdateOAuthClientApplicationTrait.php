<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateOAuthClientApplication;

trait UpdateOAuthClientApplicationTrait
{
    /**
     * @param UpdateOAuthClientApplicationRequest $args
     * @return UpdateOAuthClientApplicationResponse
     */
    public function updateOAuthClientApplication(UpdateOAuthClientApplicationRequest $args)
    {
        $result = parent::updateOAuthClientApplication($args->toArray());
        return new UpdateOAuthClientApplicationResponse($result->toArray());
    }
}
