<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\ListAppInstanceUserEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property 'INVALID_DEVICE_TOKEN'|'INVALID_PINPOINT_ARN' $StatusReason
 */
class EndpointState extends Shape
{
    /**
     * @param array{
     *     Status: 'ACTIVE'|'INACTIVE',
     *     StatusReason?: 'INVALID_DEVICE_TOKEN'|'INVALID_PINPOINT_ARN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
