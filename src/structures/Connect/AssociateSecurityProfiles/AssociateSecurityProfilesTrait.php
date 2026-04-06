<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateSecurityProfiles;

trait AssociateSecurityProfilesTrait
{
    /**
     * @param AssociateSecurityProfilesRequest $args
     * @return void
     */
    public function associateSecurityProfiles(AssociateSecurityProfilesRequest $args)
    {
        parent::associateSecurityProfiles($args->toArray());
    }
}
