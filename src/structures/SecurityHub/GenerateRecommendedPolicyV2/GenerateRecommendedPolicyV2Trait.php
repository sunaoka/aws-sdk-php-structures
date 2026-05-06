<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GenerateRecommendedPolicyV2;

trait GenerateRecommendedPolicyV2Trait
{
    /**
     * @param GenerateRecommendedPolicyV2Request $args
     * @return GenerateRecommendedPolicyV2Response
     */
    public function generateRecommendedPolicyV2(GenerateRecommendedPolicyV2Request $args)
    {
        $result = parent::generateRecommendedPolicyV2($args->toArray());
        return new GenerateRecommendedPolicyV2Response($result->toArray());
    }
}
