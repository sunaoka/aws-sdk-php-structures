<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeHoursOfOperation;

trait DescribeHoursOfOperationTrait
{
    /**
     * @param DescribeHoursOfOperationRequest $args
     * @return DescribeHoursOfOperationResponse
     */
    public function describeHoursOfOperation(DescribeHoursOfOperationRequest $args)
    {
        $result = parent::describeHoursOfOperation($args->toArray());
        return new DescribeHoursOfOperationResponse($result->toArray());
    }
}
