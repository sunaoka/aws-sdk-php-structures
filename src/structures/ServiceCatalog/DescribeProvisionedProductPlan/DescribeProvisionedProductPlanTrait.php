<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisionedProductPlan;

trait DescribeProvisionedProductPlanTrait
{
    /**
     * @param DescribeProvisionedProductPlanRequest $args
     * @return DescribeProvisionedProductPlanResponse
     */
    public function describeProvisionedProductPlan(DescribeProvisionedProductPlanRequest $args)
    {
        $result = parent::describeProvisionedProductPlan($args->toArray());
        return new DescribeProvisionedProductPlanResponse($result->toArray());
    }
}
