<?php

namespace Sunaoka\Aws\Structures\Ec2\GetManagedPrefixListAssociations;

trait GetManagedPrefixListAssociationsTrait
{
    /**
     * @param GetManagedPrefixListAssociationsRequest $args
     * @return GetManagedPrefixListAssociationsResponse
     */
    public function getManagedPrefixListAssociations(GetManagedPrefixListAssociationsRequest $args)
    {
        $result = parent::getManagedPrefixListAssociations($args->toArray());
        return new GetManagedPrefixListAssociationsResponse($result->toArray());
    }
}
