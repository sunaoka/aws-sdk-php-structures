<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JupyterServerAppSettings|null $JupyterServerAppSettings
 * @property KernelGatewayAppSettings|null $KernelGatewayAppSettings
 */
class SpaceSettings extends Shape
{
    /**
     * @param array{
     *     JupyterServerAppSettings?: JupyterServerAppSettings|null,
     *     KernelGatewayAppSettings?: KernelGatewayAppSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
