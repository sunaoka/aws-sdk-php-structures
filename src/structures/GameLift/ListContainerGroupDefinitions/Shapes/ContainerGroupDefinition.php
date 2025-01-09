<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerGroupDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerGroupDefinitionArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'AMAZON_LINUX_2023' $OperatingSystem
 * @property string $Name
 * @property 'GAME_SERVER'|'PER_INSTANCE' $ContainerGroupType
 * @property int<4, 1024000> $TotalMemoryLimitMebibytes
 * @property double $TotalVcpuLimit
 * @property GameServerContainerDefinition $GameServerContainerDefinition
 * @property list<SupportContainerDefinition> $SupportContainerDefinitions
 * @property int<1, max> $VersionNumber
 * @property string $VersionDescription
 * @property 'READY'|'COPYING'|'FAILED' $Status
 * @property string $StatusReason
 */
class ContainerGroupDefinition extends Shape
{
    /**
     * @param array{
     *     ContainerGroupDefinitionArn?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     OperatingSystem?: 'AMAZON_LINUX_2023',
     *     Name: string,
     *     ContainerGroupType?: 'GAME_SERVER'|'PER_INSTANCE',
     *     TotalMemoryLimitMebibytes?: int<4, 1024000>,
     *     TotalVcpuLimit?: double,
     *     GameServerContainerDefinition?: GameServerContainerDefinition,
     *     SupportContainerDefinitions?: list<SupportContainerDefinition>,
     *     VersionNumber?: int<1, max>,
     *     VersionDescription?: string,
     *     Status?: 'READY'|'COPYING'|'FAILED',
     *     StatusReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
