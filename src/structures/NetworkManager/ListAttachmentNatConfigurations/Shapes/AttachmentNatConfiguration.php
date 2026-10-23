<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListAttachmentNatConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttachmentId
 * @property 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING'|'PENDING_ATTACHMENT_ACCEPTANCE'|null $NatGatewaySupport
 * @property bool|null $NatSystemRouteSupport
 * @property list<NatRule>|null $NatGatewayRules
 */
class AttachmentNatConfiguration extends Shape
{
    /**
     * @param array{
     *     AttachmentId?: string|null,
     *     NatGatewaySupport?: 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING'|'PENDING_ATTACHMENT_ACCEPTANCE'|null,
     *     NatSystemRouteSupport?: bool|null,
     *     NatGatewayRules?: list<NatRule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
