<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRecommendedPolicyV2;

trait GetRecommendedPolicyV2Trait
{
    /**
     * @param GetRecommendedPolicyV2Request $args
     * @return GetRecommendedPolicyV2Response
     */
    public function getRecommendedPolicyV2(GetRecommendedPolicyV2Request $args)
    {
        $result = parent::getRecommendedPolicyV2($args->toArray());
        return new GetRecommendedPolicyV2Response($result->toArray());
    }
}
