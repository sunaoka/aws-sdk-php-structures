<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteCustomDomainAssociation;

trait DeleteCustomDomainAssociationTrait
{
    /**
     * @param DeleteCustomDomainAssociationRequest $args
     * @return void
     */
    public function deleteCustomDomainAssociation(DeleteCustomDomainAssociationRequest $args)
    {
        parent::deleteCustomDomainAssociation($args->toArray());
    }
}
