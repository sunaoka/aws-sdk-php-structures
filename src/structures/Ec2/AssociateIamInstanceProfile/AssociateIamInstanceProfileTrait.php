<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateIamInstanceProfile;

trait AssociateIamInstanceProfileTrait
{
    /**
     * @param AssociateIamInstanceProfileRequest $args
     * @return AssociateIamInstanceProfileResponse
     */
    public function associateIamInstanceProfile(AssociateIamInstanceProfileRequest $args)
    {
        $result = parent::associateIamInstanceProfile($args->toArray());
        return new AssociateIamInstanceProfileResponse($result->toArray());
    }
}
