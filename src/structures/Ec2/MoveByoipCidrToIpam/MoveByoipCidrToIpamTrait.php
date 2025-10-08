<?php

namespace Sunaoka\Aws\Structures\Ec2\MoveByoipCidrToIpam;

trait MoveByoipCidrToIpamTrait
{
    /**
     * @param MoveByoipCidrToIpamRequest $args
     * @return MoveByoipCidrToIpamResponse
     */
    public function moveByoipCidrToIpam(MoveByoipCidrToIpamRequest $args)
    {
        $result = parent::moveByoipCidrToIpam($args->toArray());
        return new MoveByoipCidrToIpamResponse($result->toArray());
    }
}
