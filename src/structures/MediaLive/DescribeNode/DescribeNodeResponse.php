<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeNode;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property list<string>|null $ChannelPlacementGroups
 * @property string|null $ClusterId
 * @property 'CONNECTED'|'DISCONNECTED'|null $ConnectionState
 * @property string|null $Id
 * @property string|null $InstanceArn
 * @property string|null $Name
 * @property list<Shapes\NodeInterfaceMapping>|null $NodeInterfaceMappings
 * @property 'BACKUP'|'ACTIVE'|null $Role
 * @property 'CREATED'|'REGISTERING'|'READY_TO_ACTIVATE'|'REGISTRATION_FAILED'|'ACTIVATION_FAILED'|'ACTIVE'|'READY'|'IN_USE'|'DEREGISTERING'|'DRAINING'|'DEREGISTRATION_FAILED'|'DEREGISTERED'|null $State
 */
class DescribeNodeResponse extends Response
{
}
