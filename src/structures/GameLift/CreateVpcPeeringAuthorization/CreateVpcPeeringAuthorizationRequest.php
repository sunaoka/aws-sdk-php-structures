<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateVpcPeeringAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameLiftAwsAccountId
 * @property string $PeerVpcId
 */
class CreateVpcPeeringAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     GameLiftAwsAccountId: string,
     *     PeerVpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
