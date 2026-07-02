<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetProvisionedLimit;

trait GetProvisionedLimitTrait
{
    /**
     * @param GetProvisionedLimitRequest $args
     * @return GetProvisionedLimitResponse
     */
    public function getProvisionedLimit(GetProvisionedLimitRequest $args)
    {
        $result = parent::getProvisionedLimit($args->toArray());
        return new GetProvisionedLimitResponse($result->toArray());
    }
}
