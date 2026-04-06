<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas'|null $AppType
 * @property SpaceStorageSettings|null $SpaceStorageSettings
 */
class SpaceSettingsSummary extends Shape
{
    /**
     * @param array{
     *     AppType?: 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas'|null,
     *     SpaceStorageSettings?: SpaceStorageSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
