<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JupyterServerAppSettings $JupyterServerAppSettings
 * @property KernelGatewayAppSettings $KernelGatewayAppSettings
 * @property SpaceCodeEditorAppSettings $CodeEditorAppSettings
 * @property SpaceJupyterLabAppSettings $JupyterLabAppSettings
 * @property 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas' $AppType
 * @property SpaceStorageSettings $SpaceStorageSettings
 * @property list<CustomFileSystem> $CustomFileSystems
 */
class SpaceSettings extends Shape
{
    /**
     * @param array{
     *     JupyterServerAppSettings?: JupyterServerAppSettings,
     *     KernelGatewayAppSettings?: KernelGatewayAppSettings,
     *     CodeEditorAppSettings?: SpaceCodeEditorAppSettings,
     *     JupyterLabAppSettings?: SpaceJupyterLabAppSettings,
     *     AppType?: 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas',
     *     SpaceStorageSettings?: SpaceStorageSettings,
     *     CustomFileSystems?: list<CustomFileSystem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
