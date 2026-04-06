<?php

namespace Sunaoka\Aws\Structures\SesV2\GetTenant;

trait GetTenantTrait
{
    /**
     * @param GetTenantRequest $args
     * @return GetTenantResponse
     */
    public function getTenant(GetTenantRequest $args)
    {
        $result = parent::getTenant($args->toArray());
        return new GetTenantResponse($result->toArray());
    }
}
