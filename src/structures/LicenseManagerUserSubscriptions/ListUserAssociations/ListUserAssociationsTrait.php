<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListUserAssociations;

trait ListUserAssociationsTrait
{
    /**
     * @param ListUserAssociationsRequest $args
     * @return ListUserAssociationsResponse
     */
    public function listUserAssociations(ListUserAssociationsRequest $args)
    {
        $result = parent::listUserAssociations($args->toArray());
        return new ListUserAssociationsResponse($result->toArray());
    }
}
