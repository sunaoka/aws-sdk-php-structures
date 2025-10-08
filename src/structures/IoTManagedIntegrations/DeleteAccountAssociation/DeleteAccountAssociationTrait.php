<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteAccountAssociation;

trait DeleteAccountAssociationTrait
{
    /**
     * @param DeleteAccountAssociationRequest $args
     * @return void
     */
    public function deleteAccountAssociation(DeleteAccountAssociationRequest $args)
    {
        parent::deleteAccountAssociation($args->toArray());
    }
}
