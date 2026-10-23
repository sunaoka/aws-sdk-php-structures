<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateAttachmentNatConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttachmentId
 * @property 'ENABLE'|'DISABLE'|null $NatGatewaySupport
 * @property bool|null $NatSystemRouteSupport
 * @property list<Shapes\NatRuleRequest>|null $NatGatewayRules
 * @property string|null $ClientToken
 */
class UpdateAttachmentNatConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AttachmentId: string,
     *     NatGatewaySupport?: 'ENABLE'|'DISABLE'|null,
     *     NatSystemRouteSupport?: bool|null,
     *     NatGatewayRules?: list<Shapes\NatRuleRequest>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
