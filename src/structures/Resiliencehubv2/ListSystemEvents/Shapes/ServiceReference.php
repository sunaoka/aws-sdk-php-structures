<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListSystemEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceId
 * @property string|null $serviceName
 */
class ServiceReference extends Shape
{
    /**
     * @param array{
     *     serviceId?: string|null,
     *     serviceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
