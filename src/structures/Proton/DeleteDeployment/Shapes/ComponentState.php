<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceInstanceName
 * @property string $serviceName
 * @property string $serviceSpec
 * @property string $templateFile
 */
class ComponentState extends Shape
{
    /**
     * @param array{
     *     serviceInstanceName?: string,
     *     serviceName?: string,
     *     serviceSpec?: string,
     *     templateFile?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
