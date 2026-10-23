<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayAttachmentNatConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TransitGatewayAttachmentId
 * @property 'enabled'|'disabled'|'enabling'|'disabling'|null $NatGatewaySupport
 * @property 'enable'|'disable'|null $NatSystemRouteSupport
 * @property list<Shapes\TransitGatewayNatRule>|null $NatGatewayRules
 */
class ModifyTransitGatewayAttachmentNatConfigurationResponse extends Response
{
}
