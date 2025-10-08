<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ActivateOrganizationsAccess;

trait ActivateOrganizationsAccessTrait
{
    /**
     * @param ActivateOrganizationsAccessRequest $args
     * @return ActivateOrganizationsAccessResponse
     */
    public function activateOrganizationsAccess(ActivateOrganizationsAccessRequest $args)
    {
        $result = parent::activateOrganizationsAccess($args->toArray());
        return new ActivateOrganizationsAccessResponse($result->toArray());
    }
}
