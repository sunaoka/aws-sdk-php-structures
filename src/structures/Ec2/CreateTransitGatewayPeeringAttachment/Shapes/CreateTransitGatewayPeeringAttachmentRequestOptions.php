<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayPeeringAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enable'|'disable'|null $DynamicRouting
 * @property bool|null $AllowMultipathResilience
 * @property 'always-on'|null $MultipathResilienceMode
 */
class CreateTransitGatewayPeeringAttachmentRequestOptions extends Shape
{
    /**
     * @param array{
     *     DynamicRouting?: 'enable'|'disable'|null,
     *     AllowMultipathResilience?: bool|null,
     *     MultipathResilienceMode?: 'always-on'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
