<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccountCustomization;

trait DescribeAccountCustomizationTrait
{
    /**
     * @param DescribeAccountCustomizationRequest $args
     * @return DescribeAccountCustomizationResponse
     */
    public function describeAccountCustomization(DescribeAccountCustomizationRequest $args)
    {
        $result = parent::describeAccountCustomization($args->toArray());
        return new DescribeAccountCustomizationResponse($result->toArray());
    }
}
