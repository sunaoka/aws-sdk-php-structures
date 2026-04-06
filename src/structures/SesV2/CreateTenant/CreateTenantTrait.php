<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateTenant;

trait CreateTenantTrait
{
    /**
     * @param CreateTenantRequest $args
     * @return CreateTenantResponse
     */
    public function createTenant(CreateTenantRequest $args)
    {
        $result = parent::createTenant($args->toArray());
        return new CreateTenantResponse($result->toArray());
    }
}
