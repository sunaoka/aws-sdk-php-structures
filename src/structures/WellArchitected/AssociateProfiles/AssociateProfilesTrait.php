<?php

namespace Sunaoka\Aws\Structures\WellArchitected\AssociateProfiles;

trait AssociateProfilesTrait
{
    /**
     * @param AssociateProfilesRequest $args
     * @return void
     */
    public function associateProfiles(AssociateProfilesRequest $args)
    {
        parent::associateProfiles($args->toArray());
    }
}
