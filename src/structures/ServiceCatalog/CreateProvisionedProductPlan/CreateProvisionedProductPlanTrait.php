<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateProvisionedProductPlan;

trait CreateProvisionedProductPlanTrait
{
    /**
     * @param CreateProvisionedProductPlanRequest $args
     * @return CreateProvisionedProductPlanResponse
     */
    public function createProvisionedProductPlan(CreateProvisionedProductPlanRequest $args)
    {
        $result = parent::createProvisionedProductPlan($args->toArray());
        return new CreateProvisionedProductPlanResponse($result->toArray());
    }
}
