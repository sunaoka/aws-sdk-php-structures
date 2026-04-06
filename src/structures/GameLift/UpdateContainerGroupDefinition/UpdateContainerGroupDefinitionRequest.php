<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateContainerGroupDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\GameServerContainerDefinitionInput|null $GameServerContainerDefinition
 * @property list<Shapes\SupportContainerDefinitionInput>|null $SupportContainerDefinitions
 * @property int<4, 1024000>|null $TotalMemoryLimitMebibytes
 * @property double|null $TotalVcpuLimit
 * @property string|null $VersionDescription
 * @property int<1, max>|null $SourceVersionNumber
 * @property 'AMAZON_LINUX_2023'|null $OperatingSystem
 */
class UpdateContainerGroupDefinitionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     GameServerContainerDefinition?: Shapes\GameServerContainerDefinitionInput|null,
     *     SupportContainerDefinitions?: list<Shapes\SupportContainerDefinitionInput>|null,
     *     TotalMemoryLimitMebibytes?: int<4, 1024000>|null,
     *     TotalVcpuLimit?: double|null,
     *     VersionDescription?: string|null,
     *     SourceVersionNumber?: int<1, max>|null,
     *     OperatingSystem?: 'AMAZON_LINUX_2023'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
