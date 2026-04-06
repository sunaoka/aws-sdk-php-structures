<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWebAppCustomization;

trait DescribeWebAppCustomizationTrait
{
    /**
     * @param DescribeWebAppCustomizationRequest $args
     * @return DescribeWebAppCustomizationResponse
     */
    public function describeWebAppCustomization(DescribeWebAppCustomizationRequest $args)
    {
        $result = parent::describeWebAppCustomization($args->toArray());
        return new DescribeWebAppCustomizationResponse($result->toArray());
    }
}
