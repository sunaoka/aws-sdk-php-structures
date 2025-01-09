<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateAppImageConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppImageConfigName
 * @property Shapes\KernelGatewayImageConfig $KernelGatewayImageConfig
 * @property Shapes\JupyterLabAppImageConfig $JupyterLabAppImageConfig
 * @property Shapes\CodeEditorAppImageConfig $CodeEditorAppImageConfig
 */
class UpdateAppImageConfigRequest extends Request
{
    /**
     * @param array{
     *     AppImageConfigName: string,
     *     KernelGatewayImageConfig?: Shapes\KernelGatewayImageConfig,
     *     JupyterLabAppImageConfig?: Shapes\JupyterLabAppImageConfig,
     *     CodeEditorAppImageConfig?: Shapes\CodeEditorAppImageConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
