<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeFeatureTransformation;

trait DescribeFeatureTransformationTrait
{
    /**
     * @param DescribeFeatureTransformationRequest $args
     * @return DescribeFeatureTransformationResponse
     */
    public function describeFeatureTransformation(DescribeFeatureTransformationRequest $args)
    {
        $result = parent::describeFeatureTransformation($args->toArray());
        return new DescribeFeatureTransformationResponse($result->toArray());
    }
}
