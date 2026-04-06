<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateAppImageConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppImageConfigName
 * @property Shapes\KernelGatewayImageConfig|null $KernelGatewayImageConfig
 */
class UpdateAppImageConfigRequest extends Request
{
    /**
     * @param array{
     *     AppImageConfigName: string,
     *     KernelGatewayImageConfig?: Shapes\KernelGatewayImageConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
