<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVerifiedAccessEndpointTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VerifiedAccessEndpointId
 * @property string|null $VerifiedAccessEndpointTargetIpAddress
 * @property string|null $VerifiedAccessEndpointTargetDns
 */
class VerifiedAccessEndpointTarget extends Shape
{
    /**
     * @param array{
     *     VerifiedAccessEndpointId?: string|null,
     *     VerifiedAccessEndpointTargetIpAddress?: string|null,
     *     VerifiedAccessEndpointTargetDns?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
