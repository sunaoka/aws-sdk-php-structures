<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayPeeringAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enable'|'disable'|null $DynamicRouting
 * @property bool|null $RequesterAllowMultipathResilience
 * @property 'always-on'|null $RequesterMultipathResilienceMode
 * @property bool|null $AccepterAllowMultipathResilience
 * @property 'always-on'|null $AccepterMultipathResilienceMode
 * @property 'pending'|'enabled'|'disabled'|null $MultipathResilienceStatus
 */
class TransitGatewayPeeringAttachmentOptions extends Shape
{
    /**
     * @param array{
     *     DynamicRouting?: 'enable'|'disable'|null,
     *     RequesterAllowMultipathResilience?: bool|null,
     *     RequesterMultipathResilienceMode?: 'always-on'|null,
     *     AccepterAllowMultipathResilience?: bool|null,
     *     AccepterMultipathResilienceMode?: 'always-on'|null,
     *     MultipathResilienceStatus?: 'pending'|'enabled'|'disabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
