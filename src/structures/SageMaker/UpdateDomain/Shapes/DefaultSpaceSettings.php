<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExecutionRole
 * @property list<string>|null $SecurityGroups
 * @property JupyterServerAppSettings|null $JupyterServerAppSettings
 * @property KernelGatewayAppSettings|null $KernelGatewayAppSettings
 * @property JupyterLabAppSettings|null $JupyterLabAppSettings
 * @property DefaultSpaceStorageSettings|null $SpaceStorageSettings
 * @property CustomPosixUserConfig|null $CustomPosixUserConfig
 * @property list<CustomFileSystemConfig>|null $CustomFileSystemConfigs
 */
class DefaultSpaceSettings extends Shape
{
    /**
     * @param array{
     *     ExecutionRole?: string|null,
     *     SecurityGroups?: list<string>|null,
     *     JupyterServerAppSettings?: JupyterServerAppSettings|null,
     *     KernelGatewayAppSettings?: KernelGatewayAppSettings|null,
     *     JupyterLabAppSettings?: JupyterLabAppSettings|null,
     *     SpaceStorageSettings?: DefaultSpaceStorageSettings|null,
     *     CustomPosixUserConfig?: CustomPosixUserConfig|null,
     *     CustomFileSystemConfigs?: list<CustomFileSystemConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
