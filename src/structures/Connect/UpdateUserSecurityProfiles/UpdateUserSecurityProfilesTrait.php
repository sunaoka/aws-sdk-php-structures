<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserSecurityProfiles;

trait UpdateUserSecurityProfilesTrait
{
    /**
     * @param UpdateUserSecurityProfilesRequest $args
     * @return void
     */
    public function updateUserSecurityProfiles(UpdateUserSecurityProfilesRequest $args)
    {
        parent::updateUserSecurityProfiles($args->toArray());
    }
}
