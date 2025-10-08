<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeAvailabilityOptions;

trait DescribeAvailabilityOptionsTrait
{
    /**
     * @param DescribeAvailabilityOptionsRequest $args
     * @return DescribeAvailabilityOptionsResponse
     */
    public function describeAvailabilityOptions(DescribeAvailabilityOptionsRequest $args)
    {
        $result = parent::describeAvailabilityOptions($args->toArray());
        return new DescribeAvailabilityOptionsResponse($result->toArray());
    }
}
