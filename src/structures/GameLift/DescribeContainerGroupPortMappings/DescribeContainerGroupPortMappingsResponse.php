<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeContainerGroupPortMappings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FleetId
 * @property string|null $Location
 * @property string|null $ContainerGroupDefinitionArn
 * @property 'GAME_SERVER'|'PER_INSTANCE'|null $ContainerGroupType
 * @property string|null $ComputeName
 * @property string|null $InstanceId
 * @property list<Shapes\ContainerGroupPortMapping>|null $ContainerGroupPortMappings
 */
class DescribeContainerGroupPortMappingsResponse extends Response
{
}
