<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAppImageConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppImageConfigName
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\KernelGatewayImageConfig|null $KernelGatewayImageConfig
 */
class CreateAppImageConfigRequest extends Request
{
    /**
     * @param array{
     *     AppImageConfigName: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     KernelGatewayImageConfig?: Shapes\KernelGatewayImageConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
