<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateOAuthClientApplication;

trait CreateOAuthClientApplicationTrait
{
    /**
     * @param CreateOAuthClientApplicationRequest $args
     * @return CreateOAuthClientApplicationResponse
     */
    public function createOAuthClientApplication(CreateOAuthClientApplicationRequest $args)
    {
        $result = parent::createOAuthClientApplication($args->toArray());
        return new CreateOAuthClientApplicationResponse($result->toArray());
    }
}
