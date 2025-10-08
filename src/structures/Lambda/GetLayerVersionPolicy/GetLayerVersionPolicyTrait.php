<?php

namespace Sunaoka\Aws\Structures\Lambda\GetLayerVersionPolicy;

trait GetLayerVersionPolicyTrait
{
    /**
     * @param GetLayerVersionPolicyRequest $args
     * @return GetLayerVersionPolicyResponse
     */
    public function getLayerVersionPolicy(GetLayerVersionPolicyRequest $args)
    {
        $result = parent::getLayerVersionPolicy($args->toArray());
        return new GetLayerVersionPolicyResponse($result->toArray());
    }
}
