<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateContainerGroupDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'GAME_SERVER'|'PER_INSTANCE' $ContainerGroupType
 * @property int $TotalMemoryLimitMebibytes
 * @property double $TotalVcpuLimit
 * @property Shapes\GameServerContainerDefinitionInput $GameServerContainerDefinition
 * @property list<Shapes\SupportContainerDefinitionInput> $SupportContainerDefinitions
 * @property 'AMAZON_LINUX_2023' $OperatingSystem
 * @property string $VersionDescription
 * @property list<Shapes\Tag> $Tags
 */
class CreateContainerGroupDefinitionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ContainerGroupType?: 'GAME_SERVER'|'PER_INSTANCE',
     *     TotalMemoryLimitMebibytes: int,
     *     TotalVcpuLimit: double,
     *     GameServerContainerDefinition?: Shapes\GameServerContainerDefinitionInput,
     *     SupportContainerDefinitions?: list<Shapes\SupportContainerDefinitionInput>,
     *     OperatingSystem: 'AMAZON_LINUX_2023',
     *     VersionDescription?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
