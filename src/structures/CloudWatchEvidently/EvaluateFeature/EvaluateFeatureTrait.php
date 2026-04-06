<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\EvaluateFeature;

trait EvaluateFeatureTrait
{
    /**
     * @param EvaluateFeatureRequest $args
     * @return EvaluateFeatureResponse
     */
    public function evaluateFeature(EvaluateFeatureRequest $args)
    {
        $result = parent::evaluateFeature($args->toArray());
        return new EvaluateFeatureResponse($result->toArray());
    }
}
