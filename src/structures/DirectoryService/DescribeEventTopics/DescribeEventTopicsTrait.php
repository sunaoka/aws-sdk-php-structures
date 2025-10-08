<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeEventTopics;

trait DescribeEventTopicsTrait
{
    /**
     * @param DescribeEventTopicsRequest $args
     * @return DescribeEventTopicsResponse
     */
    public function describeEventTopics(DescribeEventTopicsRequest $args)
    {
        $result = parent::describeEventTopics($args->toArray());
        return new DescribeEventTopicsResponse($result->toArray());
    }
}
