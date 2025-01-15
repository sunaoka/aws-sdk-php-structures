<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeVpcPeeringAuthorizations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GameLiftAwsAccountId
 * @property string|null $PeerVpcAwsAccountId
 * @property string|null $PeerVpcId
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $ExpirationTime
 */
class VpcPeeringAuthorization extends Shape
{
    /**
     * @param array{
     *     GameLiftAwsAccountId?: string|null,
     *     PeerVpcAwsAccountId?: string|null,
     *     PeerVpcId?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     ExpirationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
