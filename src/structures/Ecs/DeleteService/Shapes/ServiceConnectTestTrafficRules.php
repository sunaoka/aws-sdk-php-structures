<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceConnectTestTrafficHeaderRules $header
 */
class ServiceConnectTestTrafficRules extends Shape
{
    /**
     * @param array{header: ServiceConnectTestTrafficHeaderRules} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
