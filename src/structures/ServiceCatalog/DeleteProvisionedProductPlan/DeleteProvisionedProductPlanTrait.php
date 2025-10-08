<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeleteProvisionedProductPlan;

trait DeleteProvisionedProductPlanTrait
{
    /**
     * @param DeleteProvisionedProductPlanRequest $args
     * @return DeleteProvisionedProductPlanResponse
     */
    public function deleteProvisionedProductPlan(DeleteProvisionedProductPlanRequest $args)
    {
        $result = parent::deleteProvisionedProductPlan($args->toArray());
        return new DeleteProvisionedProductPlanResponse($result->toArray());
    }
}
