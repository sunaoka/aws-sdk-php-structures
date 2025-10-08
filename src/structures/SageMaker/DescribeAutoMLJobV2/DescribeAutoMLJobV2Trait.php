<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2;

trait DescribeAutoMLJobV2Trait
{
    /**
     * @param DescribeAutoMLJobV2Request $args
     * @return DescribeAutoMLJobV2Response
     */
    public function describeAutoMLJobV2(DescribeAutoMLJobV2Request $args)
    {
        $result = parent::describeAutoMLJobV2($args->toArray());
        return new DescribeAutoMLJobV2Response($result->toArray());
    }
}
