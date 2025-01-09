<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAppImageConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppImageConfigName
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\KernelGatewayImageConfig $KernelGatewayImageConfig
 * @property Shapes\JupyterLabAppImageConfig $JupyterLabAppImageConfig
 * @property Shapes\CodeEditorAppImageConfig $CodeEditorAppImageConfig
 */
class CreateAppImageConfigRequest extends Request
{
    /**
     * @param array{
     *     AppImageConfigName: string,
     *     Tags?: list<Shapes\Tag>,
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
