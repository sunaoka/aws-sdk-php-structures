<?php

namespace Sunaoka\Aws\Structures\Route53\CreateReusableDelegationSet;

trait CreateReusableDelegationSetTrait
{
    /**
     * @param CreateReusableDelegationSetRequest $args
     * @return CreateReusableDelegationSetResponse
     */
    public function createReusableDelegationSet(CreateReusableDelegationSetRequest $args)
    {
        $result = parent::createReusableDelegationSet($args->toArray());
        return new CreateReusableDelegationSetResponse($result->toArray());
    }
}
