<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeIndex;

trait DescribeIndexTrait
{
    /**
     * @param DescribeIndexRequest $args
     * @return DescribeIndexResponse
     */
    public function describeIndex(DescribeIndexRequest $args)
    {
        $result = parent::describeIndex($args->toArray());
        return new DescribeIndexResponse($result->toArray());
    }
}
