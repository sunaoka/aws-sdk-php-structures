<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateVpcPeeringAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GameLiftAwsAccountId
 * @property string $PeerVpcAwsAccountId
 * @property string $PeerVpcId
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $ExpirationTime
 */
class VpcPeeringAuthorization extends Shape
{
    /**
     * @param array{
     *     GameLiftAwsAccountId?: string,
     *     PeerVpcAwsAccountId?: string,
     *     PeerVpcId?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     ExpirationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
