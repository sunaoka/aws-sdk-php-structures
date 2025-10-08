<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteTenant;

trait DeleteTenantTrait
{
    /**
     * @param DeleteTenantRequest $args
     * @return DeleteTenantResponse
     */
    public function deleteTenant(DeleteTenantRequest $args)
    {
        $result = parent::deleteTenant($args->toArray());
        return new DeleteTenantResponse($result->toArray());
    }
}
