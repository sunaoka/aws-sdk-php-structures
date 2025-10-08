<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyCustomDomainAssociation;

trait ModifyCustomDomainAssociationTrait
{
    /**
     * @param ModifyCustomDomainAssociationRequest $args
     * @return ModifyCustomDomainAssociationResponse
     */
    public function modifyCustomDomainAssociation(ModifyCustomDomainAssociationRequest $args)
    {
        $result = parent::modifyCustomDomainAssociation($args->toArray());
        return new ModifyCustomDomainAssociationResponse($result->toArray());
    }
}
