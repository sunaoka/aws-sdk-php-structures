<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAdjustmentTypes;

trait DescribeAdjustmentTypesTrait
{
    /**
     * @return DescribeAdjustmentTypesResponse
     */
    public function describeAdjustmentTypes()
    {
        $result = parent::describeAdjustmentTypes();
        return new DescribeAdjustmentTypesResponse($result->toArray());
    }
}
