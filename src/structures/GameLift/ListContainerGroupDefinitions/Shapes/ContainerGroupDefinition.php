<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerGroupDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContainerGroupDefinitionArn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'AMAZON_LINUX_2023'|null $OperatingSystem
 * @property string|null $Name
 * @property 'REPLICA'|'DAEMON'|null $SchedulingStrategy
 * @property int<4, 1024000>|null $TotalMemoryLimit
 * @property int<128, 10240>|null $TotalCpuLimit
 * @property list<ContainerDefinition>|null $ContainerDefinitions
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
     *     Name?: string|null,
     *     SchedulingStrategy?: 'REPLICA'|'DAEMON'|null,
     *     TotalMemoryLimit?: int<4, 1024000>|null,
     *     TotalCpuLimit?: int<128, 10240>|null,
     *     ContainerDefinitions?: list<ContainerDefinition>|null,
     *     Status?: 'READY'|'COPYING'|'FAILED'|null,
     *     StatusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
