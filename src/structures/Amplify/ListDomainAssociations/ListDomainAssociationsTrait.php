<?php

namespace Sunaoka\Aws\Structures\Amplify\ListDomainAssociations;

trait ListDomainAssociationsTrait
{
    /**
     * @param ListDomainAssociationsRequest $args
     * @return ListDomainAssociationsResponse
     */
    public function listDomainAssociations(ListDomainAssociationsRequest $args)
    {
        $result = parent::listDomainAssociations($args->toArray());
        return new ListDomainAssociationsResponse($result->toArray());
    }
}
