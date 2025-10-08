<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\BatchEvaluateFeature;

trait BatchEvaluateFeatureTrait
{
    /**
     * @param BatchEvaluateFeatureRequest $args
     * @return BatchEvaluateFeatureResponse
     */
    public function batchEvaluateFeature(BatchEvaluateFeatureRequest $args)
    {
        $result = parent::batchEvaluateFeature($args->toArray());
        return new BatchEvaluateFeatureResponse($result->toArray());
    }
}
