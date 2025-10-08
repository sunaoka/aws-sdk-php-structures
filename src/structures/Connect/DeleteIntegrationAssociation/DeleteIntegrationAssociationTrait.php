<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteIntegrationAssociation;

trait DeleteIntegrationAssociationTrait
{
    /**
     * @param DeleteIntegrationAssociationRequest $args
     * @return void
     */
    public function deleteIntegrationAssociation(DeleteIntegrationAssociationRequest $args)
    {
        parent::deleteIntegrationAssociation($args->toArray());
    }
}
