<?php

namespace Sunaoka\Aws\Structures\Route53\GetReusableDelegationSet;

trait GetReusableDelegationSetTrait
{
    /**
     * @param GetReusableDelegationSetRequest $args
     * @return GetReusableDelegationSetResponse
     */
    public function getReusableDelegationSet(GetReusableDelegationSetRequest $args)
    {
        $result = parent::getReusableDelegationSet($args->toArray());
        return new GetReusableDelegationSetResponse($result->toArray());
    }
}
