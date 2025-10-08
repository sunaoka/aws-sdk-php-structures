<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeServiceUpdates;

trait DescribeServiceUpdatesTrait
{
    /**
     * @param DescribeServiceUpdatesRequest $args
     * @return DescribeServiceUpdatesResponse
     */
    public function describeServiceUpdates(DescribeServiceUpdatesRequest $args)
    {
        $result = parent::describeServiceUpdates($args->toArray());
        return new DescribeServiceUpdatesResponse($result->toArray());
    }
}
