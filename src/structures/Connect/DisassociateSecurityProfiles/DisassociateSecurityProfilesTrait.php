<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateSecurityProfiles;

trait DisassociateSecurityProfilesTrait
{
    /**
     * @param DisassociateSecurityProfilesRequest $args
     * @return void
     */
    public function disassociateSecurityProfiles(DisassociateSecurityProfilesRequest $args)
    {
        parent::disassociateSecurityProfiles($args->toArray());
    }
}
