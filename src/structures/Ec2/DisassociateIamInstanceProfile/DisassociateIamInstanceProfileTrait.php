<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateIamInstanceProfile;

trait DisassociateIamInstanceProfileTrait
{
    /**
     * @param DisassociateIamInstanceProfileRequest $args
     * @return DisassociateIamInstanceProfileResponse
     */
    public function disassociateIamInstanceProfile(DisassociateIamInstanceProfileRequest $args)
    {
        $result = parent::disassociateIamInstanceProfile($args->toArray());
        return new DisassociateIamInstanceProfileResponse($result->toArray());
    }
}
