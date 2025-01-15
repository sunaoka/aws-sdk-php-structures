<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceInstanceName
 * @property string|null $serviceName
 * @property string|null $serviceSpec
 * @property string|null $templateFile
 */
class ComponentState extends Shape
{
    /**
     * @param array{
     *     serviceInstanceName?: string|null,
     *     serviceName?: string|null,
     *     serviceSpec?: string|null,
     *     templateFile?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
