<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListOrganizations;

trait ListOrganizationsTrait
{
    /**
     * @param ListOrganizationsRequest $args
     * @return ListOrganizationsResponse
     */
    public function listOrganizations(ListOrganizationsRequest $args)
    {
        $result = parent::listOrganizations($args->toArray());
        return new ListOrganizationsResponse($result->toArray());
    }
}
