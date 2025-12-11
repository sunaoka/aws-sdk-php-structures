<?php

namespace Sunaoka\Aws\Structures\Lambda\PublishVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaManagedInstancesCapacityProviderConfig $LambdaManagedInstancesCapacityProviderConfig
 */
class CapacityProviderConfig extends Shape
{
    /**
     * @param array{LambdaManagedInstancesCapacityProviderConfig: LambdaManagedInstancesCapacityProviderConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
