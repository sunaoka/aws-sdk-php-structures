<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\DisassociateResourceFromProfile;

trait DisassociateResourceFromProfileTrait
{
    /**
     * @param DisassociateResourceFromProfileRequest $args
     * @return DisassociateResourceFromProfileResponse
     */
    public function disassociateResourceFromProfile(DisassociateResourceFromProfileRequest $args)
    {
        $result = parent::disassociateResourceFromProfile($args->toArray());
        return new DisassociateResourceFromProfileResponse($result->toArray());
    }
}
