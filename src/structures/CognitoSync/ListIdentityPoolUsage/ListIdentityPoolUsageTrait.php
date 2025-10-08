<?php

namespace Sunaoka\Aws\Structures\CognitoSync\ListIdentityPoolUsage;

trait ListIdentityPoolUsageTrait
{
    /**
     * @param ListIdentityPoolUsageRequest $args
     * @return ListIdentityPoolUsageResponse
     */
    public function listIdentityPoolUsage(ListIdentityPoolUsageRequest $args)
    {
        $result = parent::listIdentityPoolUsage($args->toArray());
        return new ListIdentityPoolUsageResponse($result->toArray());
    }
}
