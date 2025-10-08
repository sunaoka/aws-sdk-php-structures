<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventTypes;

trait DescribeEventTypesTrait
{
    /**
     * @param DescribeEventTypesRequest $args
     * @return DescribeEventTypesResponse
     */
    public function describeEventTypes(DescribeEventTypesRequest $args)
    {
        $result = parent::describeEventTypes($args->toArray());
        return new DescribeEventTypesResponse($result->toArray());
    }
}
