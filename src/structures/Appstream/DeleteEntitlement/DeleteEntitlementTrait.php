<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteEntitlement;

trait DeleteEntitlementTrait
{
    /**
     * @param DeleteEntitlementRequest $args
     * @return DeleteEntitlementResponse
     */
    public function deleteEntitlement(DeleteEntitlementRequest $args)
    {
        $result = parent::deleteEntitlement($args->toArray());
        return new DeleteEntitlementResponse($result->toArray());
    }
}
