<?php

namespace Sunaoka\Aws\Structures\ApiGateway\RejectDomainNameAccessAssociation;

trait RejectDomainNameAccessAssociationTrait
{
    /**
     * @param RejectDomainNameAccessAssociationRequest $args
     * @return void
     */
    public function rejectDomainNameAccessAssociation(RejectDomainNameAccessAssociationRequest $args)
    {
        parent::rejectDomainNameAccessAssociation($args->toArray());
    }
}
