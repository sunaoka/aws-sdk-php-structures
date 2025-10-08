<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\DisassociateProfile;

trait DisassociateProfileTrait
{
    /**
     * @param DisassociateProfileRequest $args
     * @return DisassociateProfileResponse
     */
    public function disassociateProfile(DisassociateProfileRequest $args)
    {
        $result = parent::disassociateProfile($args->toArray());
        return new DisassociateProfileResponse($result->toArray());
    }
}
