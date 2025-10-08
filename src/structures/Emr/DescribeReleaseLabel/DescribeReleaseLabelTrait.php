<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeReleaseLabel;

trait DescribeReleaseLabelTrait
{
    /**
     * @param DescribeReleaseLabelRequest $args
     * @return DescribeReleaseLabelResponse
     */
    public function describeReleaseLabel(DescribeReleaseLabelRequest $args)
    {
        $result = parent::describeReleaseLabel($args->toArray());
        return new DescribeReleaseLabelResponse($result->toArray());
    }
}
