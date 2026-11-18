<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayPeeringAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AllowMultipathResilience
 * @property 'always-on'|null $MultipathResilienceMode
 */
class ModifyTransitGatewayPeeringAttachmentRequestOptions extends Shape
{
    /**
     * @param array{
     *     AllowMultipathResilience?: bool|null,
     *     MultipathResilienceMode?: 'always-on'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
