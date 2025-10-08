<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribePartnerEventSource;

trait DescribePartnerEventSourceTrait
{
    /**
     * @param DescribePartnerEventSourceRequest $args
     * @return DescribePartnerEventSourceResponse
     */
    public function describePartnerEventSource(DescribePartnerEventSourceRequest $args)
    {
        $result = parent::describePartnerEventSource($args->toArray());
        return new DescribePartnerEventSourceResponse($result->toArray());
    }
}
