<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateNode;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property list<string> $ChannelPlacementGroups
 * @property string $ClusterId
 * @property 'CONNECTED'|'DISCONNECTED' $ConnectionState
 * @property string $Id
 * @property string $InstanceArn
 * @property string $Name
 * @property list<Shapes\NodeInterfaceMapping> $NodeInterfaceMappings
 * @property 'BACKUP'|'ACTIVE' $Role
 * @property 'CREATED'|'REGISTERING'|'READY_TO_ACTIVATE'|'REGISTRATION_FAILED'|'ACTIVATION_FAILED'|'ACTIVE'|'READY'|'IN_USE'|'DEREGISTERING'|'DRAINING'|'DEREGISTRATION_FAILED'|'DEREGISTERED' $State
 */
class UpdateNodeResponse extends Response
{
}
