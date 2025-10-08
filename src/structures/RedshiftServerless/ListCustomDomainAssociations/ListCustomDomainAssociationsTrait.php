<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListCustomDomainAssociations;

trait ListCustomDomainAssociationsTrait
{
    /**
     * @param ListCustomDomainAssociationsRequest $args
     * @return ListCustomDomainAssociationsResponse
     */
    public function listCustomDomainAssociations(ListCustomDomainAssociationsRequest $args)
    {
        $result = parent::listCustomDomainAssociations($args->toArray());
        return new ListCustomDomainAssociationsResponse($result->toArray());
    }
}
