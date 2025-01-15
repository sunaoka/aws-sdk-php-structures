<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayPeeringAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enable'|'disable'|null $DynamicRouting
 */
class CreateTransitGatewayPeeringAttachmentRequestOptions extends Shape
{
    /**
     * @param array{DynamicRouting?: 'enable'|'disable'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
