<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeactivateOrganizationsAccess;

trait DeactivateOrganizationsAccessTrait
{
    /**
     * @param DeactivateOrganizationsAccessRequest $args
     * @return DeactivateOrganizationsAccessResponse
     */
    public function deactivateOrganizationsAccess(DeactivateOrganizationsAccessRequest $args)
    {
        $result = parent::deactivateOrganizationsAccess($args->toArray());
        return new DeactivateOrganizationsAccessResponse($result->toArray());
    }
}
