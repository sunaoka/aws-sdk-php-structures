<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeHoursOfOperationOverride;

trait DescribeHoursOfOperationOverrideTrait
{
    /**
     * @param DescribeHoursOfOperationOverrideRequest $args
     * @return DescribeHoursOfOperationOverrideResponse
     */
    public function describeHoursOfOperationOverride(DescribeHoursOfOperationOverrideRequest $args)
    {
        $result = parent::describeHoursOfOperationOverride($args->toArray());
        return new DescribeHoursOfOperationOverrideResponse($result->toArray());
    }
}
