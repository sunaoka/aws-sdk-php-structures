<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateContainerGroupDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContainerGroupDefinitionArn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'AMAZON_LINUX_2023'|null $OperatingSystem
 * @property string $Name
 * @property 'GAME_SERVER'|'PER_INSTANCE'|null $ContainerGroupType
 * @property int<4, 1024000>|null $TotalMemoryLimitMebibytes
 * @property double|null $TotalVcpuLimit
 * @property GameServerContainerDefinition|null $GameServerContainerDefinition
 * @property list<SupportContainerDefinition>|null $SupportContainerDefinitions
 * @property int<1, max>|null $VersionNumber
 * @property string|null $VersionDescription
 * @property 'READY'|'COPYING'|'FAILED'|null $Status
 * @property string|null $StatusReason
 */
class ContainerGroupDefinition extends Shape
{
    /**
     * @param array{
     *     ContainerGroupDefinitionArn?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     OperatingSystem?: 'AMAZON_LINUX_2023'|null,
     *     Name: string,
     *     ContainerGroupType?: 'GAME_SERVER'|'PER_INSTANCE'|null,
     *     TotalMemoryLimitMebibytes?: int<4, 1024000>|null,
     *     TotalVcpuLimit?: double|null,
     *     GameServerContainerDefinition?: GameServerContainerDefinition|null,
     *     SupportContainerDefinitions?: list<SupportContainerDefinition>|null,
     *     VersionNumber?: int<1, max>|null,
     *     VersionDescription?: string|null,
     *     Status?: 'READY'|'COPYING'|'FAILED'|null,
     *     StatusReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
