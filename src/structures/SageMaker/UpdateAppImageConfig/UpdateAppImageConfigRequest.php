<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateAppImageConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppImageConfigName
 * @property Shapes\KernelGatewayImageConfig|null $KernelGatewayImageConfig
 * @property Shapes\JupyterLabAppImageConfig|null $JupyterLabAppImageConfig
 * @property Shapes\CodeEditorAppImageConfig|null $CodeEditorAppImageConfig
 */
class UpdateAppImageConfigRequest extends Request
{
    /**
     * @param array{
     *     AppImageConfigName: string,
     *     KernelGatewayImageConfig?: Shapes\KernelGatewayImageConfig|null,
     *     JupyterLabAppImageConfig?: Shapes\JupyterLabAppImageConfig|null,
     *     CodeEditorAppImageConfig?: Shapes\CodeEditorAppImageConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
