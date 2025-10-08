<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListProvisionedProductPlans;

trait ListProvisionedProductPlansTrait
{
    /**
     * @param ListProvisionedProductPlansRequest $args
     * @return ListProvisionedProductPlansResponse
     */
    public function listProvisionedProductPlans(ListProvisionedProductPlansRequest $args)
    {
        $result = parent::listProvisionedProductPlans($args->toArray());
        return new ListProvisionedProductPlansResponse($result->toArray());
    }
}
