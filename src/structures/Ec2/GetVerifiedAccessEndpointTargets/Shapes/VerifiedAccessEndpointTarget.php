<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVerifiedAccessEndpointTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VerifiedAccessEndpointId
 * @property string $VerifiedAccessEndpointTargetIpAddress
 * @property string $VerifiedAccessEndpointTargetDns
 */
class VerifiedAccessEndpointTarget extends Shape
{
    /**
     * @param array{
     *     VerifiedAccessEndpointId?: string,
     *     VerifiedAccessEndpointTargetIpAddress?: string,
     *     VerifiedAccessEndpointTargetDns?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
