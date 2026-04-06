<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAppImageConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppImageConfigName
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\KernelGatewayImageConfig|null $KernelGatewayImageConfig
 * @property Shapes\JupyterLabAppImageConfig|null $JupyterLabAppImageConfig
 * @property Shapes\CodeEditorAppImageConfig|null $CodeEditorAppImageConfig
 */
class CreateAppImageConfigRequest extends Request
{
    /**
     * @param array{
     *     AppImageConfigName: string,
     *     Tags?: list<Shapes\Tag>|null,
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
