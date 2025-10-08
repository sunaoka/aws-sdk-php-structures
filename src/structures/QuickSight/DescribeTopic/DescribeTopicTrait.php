<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopic;

trait DescribeTopicTrait
{
    /**
     * @param DescribeTopicRequest $args
     * @return DescribeTopicResponse
     */
    public function describeTopic(DescribeTopicRequest $args)
    {
        $result = parent::describeTopic($args->toArray());
        return new DescribeTopicResponse($result->toArray());
    }
}
