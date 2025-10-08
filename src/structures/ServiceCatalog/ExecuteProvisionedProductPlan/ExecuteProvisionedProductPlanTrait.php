<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ExecuteProvisionedProductPlan;

trait ExecuteProvisionedProductPlanTrait
{
    /**
     * @param ExecuteProvisionedProductPlanRequest $args
     * @return ExecuteProvisionedProductPlanResponse
     */
    public function executeProvisionedProductPlan(ExecuteProvisionedProductPlanRequest $args)
    {
        $result = parent::executeProvisionedProductPlan($args->toArray());
        return new ExecuteProvisionedProductPlanResponse($result->toArray());
    }
}
