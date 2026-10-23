<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateAttachmentNatConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AttachmentId
 * @property 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING'|'PENDING_ATTACHMENT_ACCEPTANCE'|null $NatGatewaySupport
 * @property bool|null $NatSystemRouteSupport
 * @property list<Shapes\NatRule>|null $NatGatewayRules
 */
class UpdateAttachmentNatConfigurationResponse extends Response
{
}
