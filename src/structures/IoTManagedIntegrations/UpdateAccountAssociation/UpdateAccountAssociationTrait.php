<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateAccountAssociation;

trait UpdateAccountAssociationTrait
{
    /**
     * @param UpdateAccountAssociationRequest $args
     * @return void
     */
    public function updateAccountAssociation(UpdateAccountAssociationRequest $args)
    {
        parent::updateAccountAssociation($args->toArray());
    }
}
