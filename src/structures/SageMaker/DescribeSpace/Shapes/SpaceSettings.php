<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JupyterServerAppSettings|null $JupyterServerAppSettings
 * @property KernelGatewayAppSettings|null $KernelGatewayAppSettings
 * @property SpaceCodeEditorAppSettings|null $CodeEditorAppSettings
 * @property SpaceJupyterLabAppSettings|null $JupyterLabAppSettings
 * @property 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas'|null $AppType
 * @property SpaceStorageSettings|null $SpaceStorageSettings
 * @property 'ENABLED'|'DISABLED'|null $SpaceManagedResources
 * @property list<CustomFileSystem>|null $CustomFileSystems
 */
class SpaceSettings extends Shape
{
    /**
     * @param array{
     *     JupyterServerAppSettings?: JupyterServerAppSettings|null,
     *     KernelGatewayAppSettings?: KernelGatewayAppSettings|null,
     *     CodeEditorAppSettings?: SpaceCodeEditorAppSettings|null,
     *     JupyterLabAppSettings?: SpaceJupyterLabAppSettings|null,
     *     AppType?: 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas'|null,
     *     SpaceStorageSettings?: SpaceStorageSettings|null,
     *     SpaceManagedResources?: 'ENABLED'|'DISABLED'|null,
     *     CustomFileSystems?: list<CustomFileSystem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
