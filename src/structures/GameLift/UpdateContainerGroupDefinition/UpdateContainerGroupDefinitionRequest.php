<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateContainerGroupDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\GameServerContainerDefinitionInput $GameServerContainerDefinition
 * @property list<Shapes\SupportContainerDefinitionInput> $SupportContainerDefinitions
 * @property int<4, 1024000> $TotalMemoryLimitMebibytes
 * @property double $TotalVcpuLimit
 * @property string $VersionDescription
 * @property int<1, max> $SourceVersionNumber
 * @property 'AMAZON_LINUX_2023' $OperatingSystem
 */
class UpdateContainerGroupDefinitionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     GameServerContainerDefinition?: Shapes\GameServerContainerDefinitionInput,
     *     SupportContainerDefinitions?: list<Shapes\SupportContainerDefinitionInput>,
     *     TotalMemoryLimitMebibytes?: int<4, 1024000>,
     *     TotalVcpuLimit?: double,
     *     VersionDescription?: string,
     *     SourceVersionNumber?: int<1, max>,
     *     OperatingSystem?: 'AMAZON_LINUX_2023'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
