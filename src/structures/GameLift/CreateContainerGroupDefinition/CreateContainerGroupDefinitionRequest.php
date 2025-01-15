<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateContainerGroupDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'GAME_SERVER'|'PER_INSTANCE'|null $ContainerGroupType
 * @property int<4, 1024000> $TotalMemoryLimitMebibytes
 * @property double $TotalVcpuLimit
 * @property Shapes\GameServerContainerDefinitionInput|null $GameServerContainerDefinition
 * @property list<Shapes\SupportContainerDefinitionInput>|null $SupportContainerDefinitions
 * @property 'AMAZON_LINUX_2023' $OperatingSystem
 * @property string|null $VersionDescription
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateContainerGroupDefinitionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ContainerGroupType?: 'GAME_SERVER'|'PER_INSTANCE'|null,
     *     TotalMemoryLimitMebibytes: int<4, 1024000>,
     *     TotalVcpuLimit: double,
     *     GameServerContainerDefinition?: Shapes\GameServerContainerDefinitionInput|null,
     *     SupportContainerDefinitions?: list<Shapes\SupportContainerDefinitionInput>|null,
     *     OperatingSystem: 'AMAZON_LINUX_2023',
     *     VersionDescription?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
