<?php

namespace Sunaoka\Aws\Structures\Organizations\RemoveAccountFromOrganization;

trait RemoveAccountFromOrganizationTrait
{
    /**
     * @param RemoveAccountFromOrganizationRequest $args
     * @return void
     */
    public function removeAccountFromOrganization(RemoveAccountFromOrganizationRequest $args)
    {
        parent::removeAccountFromOrganization($args->toArray());
    }
}
