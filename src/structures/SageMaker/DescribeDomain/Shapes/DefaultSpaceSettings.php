<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExecutionRole
 * @property list<string> $SecurityGroups
 * @property JupyterServerAppSettings $JupyterServerAppSettings
 * @property KernelGatewayAppSettings $KernelGatewayAppSettings
 * @property JupyterLabAppSettings $JupyterLabAppSettings
 * @property DefaultSpaceStorageSettings $SpaceStorageSettings
 * @property CustomPosixUserConfig $CustomPosixUserConfig
 * @property list<CustomFileSystemConfig> $CustomFileSystemConfigs
 */
class DefaultSpaceSettings extends Shape
{
    /**
     * @param array{
     *     ExecutionRole?: string,
     *     SecurityGroups?: list<string>,
     *     JupyterServerAppSettings?: JupyterServerAppSettings,
     *     KernelGatewayAppSettings?: KernelGatewayAppSettings,
     *     JupyterLabAppSettings?: JupyterLabAppSettings,
     *     SpaceStorageSettings?: DefaultSpaceStorageSettings,
     *     CustomPosixUserConfig?: CustomPosixUserConfig,
     *     CustomFileSystemConfigs?: list<CustomFileSystemConfig>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
