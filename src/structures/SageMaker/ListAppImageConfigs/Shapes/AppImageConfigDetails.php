<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAppImageConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppImageConfigArn
 * @property string $AppImageConfigName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property KernelGatewayImageConfig $KernelGatewayImageConfig
 * @property JupyterLabAppImageConfig $JupyterLabAppImageConfig
 * @property CodeEditorAppImageConfig $CodeEditorAppImageConfig
 */
class AppImageConfigDetails extends Shape
{
    /**
     * @param array{
     *     AppImageConfigArn?: string,
     *     AppImageConfigName?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     KernelGatewayImageConfig?: KernelGatewayImageConfig,
     *     JupyterLabAppImageConfig?: JupyterLabAppImageConfig,
     *     CodeEditorAppImageConfig?: CodeEditorAppImageConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
