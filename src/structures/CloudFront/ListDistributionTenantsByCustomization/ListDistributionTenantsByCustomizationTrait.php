<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionTenantsByCustomization;

trait ListDistributionTenantsByCustomizationTrait
{
    /**
     * @param ListDistributionTenantsByCustomizationRequest $args
     * @return ListDistributionTenantsByCustomizationResponse
     */
    public function listDistributionTenantsByCustomization(ListDistributionTenantsByCustomizationRequest $args)
    {
        $result = parent::listDistributionTenantsByCustomization($args->toArray());
        return new ListDistributionTenantsByCustomizationResponse($result->toArray());
    }
}
