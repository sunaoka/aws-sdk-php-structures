<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteDomainNameAccessAssociation;

trait DeleteDomainNameAccessAssociationTrait
{
    /**
     * @param DeleteDomainNameAccessAssociationRequest $args
     * @return void
     */
    public function deleteDomainNameAccessAssociation(DeleteDomainNameAccessAssociationRequest $args)
    {
        parent::deleteDomainNameAccessAssociation($args->toArray());
    }
}
