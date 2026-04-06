<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteDistributionTenant;

trait DeleteDistributionTenantTrait
{
    /**
     * @param DeleteDistributionTenantRequest $args
     * @return void
     */
    public function deleteDistributionTenant(DeleteDistributionTenantRequest $args)
    {
        parent::deleteDistributionTenant($args->toArray());
    }
}
