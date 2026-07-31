<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopicV2;

trait DescribeTopicV2Trait
{
    /**
     * @param DescribeTopicV2Request $args
     * @return DescribeTopicV2Response
     */
    public function describeTopicV2(DescribeTopicV2Request $args)
    {
        $result = parent::describeTopicV2($args->toArray());
        return new DescribeTopicV2Response($result->toArray());
    }
}
