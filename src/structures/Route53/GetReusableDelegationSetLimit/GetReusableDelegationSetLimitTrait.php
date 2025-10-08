<?php

namespace Sunaoka\Aws\Structures\Route53\GetReusableDelegationSetLimit;

trait GetReusableDelegationSetLimitTrait
{
    /**
     * @param GetReusableDelegationSetLimitRequest $args
     * @return GetReusableDelegationSetLimitResponse
     */
    public function getReusableDelegationSetLimit(GetReusableDelegationSetLimitRequest $args)
    {
        $result = parent::getReusableDelegationSetLimit($args->toArray());
        return new GetReusableDelegationSetLimitResponse($result->toArray());
    }
}
