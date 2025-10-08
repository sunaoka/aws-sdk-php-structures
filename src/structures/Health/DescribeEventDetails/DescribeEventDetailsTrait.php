<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetails;

trait DescribeEventDetailsTrait
{
    /**
     * @param DescribeEventDetailsRequest $args
     * @return DescribeEventDetailsResponse
     */
    public function describeEventDetails(DescribeEventDetailsRequest $args)
    {
        $result = parent::describeEventDetails($args->toArray());
        return new DescribeEventDetailsResponse($result->toArray());
    }
}
