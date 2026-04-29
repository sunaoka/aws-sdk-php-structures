<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeContainerGroupPortMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property 'GAME_SERVER'|'PER_INSTANCE' $ContainerGroupType
 * @property string|null $ComputeName
 * @property string|null $InstanceId
 * @property string|null $ContainerName
 */
class DescribeContainerGroupPortMappingsRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     ContainerGroupType: 'GAME_SERVER'|'PER_INSTANCE',
     *     ComputeName?: string|null,
     *     InstanceId?: string|null,
     *     ContainerName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
