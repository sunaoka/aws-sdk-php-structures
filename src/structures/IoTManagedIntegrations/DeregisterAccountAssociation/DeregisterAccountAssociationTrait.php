<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeregisterAccountAssociation;

trait DeregisterAccountAssociationTrait
{
    /**
     * @param DeregisterAccountAssociationRequest $args
     * @return void
     */
    public function deregisterAccountAssociation(DeregisterAccountAssociationRequest $args)
    {
        parent::deregisterAccountAssociation($args->toArray());
    }
}
