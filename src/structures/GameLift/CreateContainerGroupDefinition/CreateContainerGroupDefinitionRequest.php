<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateContainerGroupDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'REPLICA'|'DAEMON'|null $SchedulingStrategy
 * @property int<4, 1024000> $TotalMemoryLimit
 * @property int<128, 10240> $TotalCpuLimit
 * @property list<Shapes\ContainerDefinitionInput> $ContainerDefinitions
 * @property 'AMAZON_LINUX_2023' $OperatingSystem
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateContainerGroupDefinitionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     SchedulingStrategy?: 'REPLICA'|'DAEMON'|null,
     *     TotalMemoryLimit: int<4, 1024000>,
     *     TotalCpuLimit: int<128, 10240>,
     *     ContainerDefinitions: list<Shapes\ContainerDefinitionInput>,
     *     OperatingSystem: 'AMAZON_LINUX_2023',
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
