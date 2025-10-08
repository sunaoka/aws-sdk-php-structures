<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DisassociateProfiles;

trait DisassociateProfilesTrait
{
    /**
     * @param DisassociateProfilesRequest $args
     * @return void
     */
    public function disassociateProfiles(DisassociateProfilesRequest $args)
    {
        parent::disassociateProfiles($args->toArray());
    }
}
