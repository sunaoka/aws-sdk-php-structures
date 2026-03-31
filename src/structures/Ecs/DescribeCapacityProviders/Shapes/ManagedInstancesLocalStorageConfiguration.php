<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeCapacityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $useLocalStorage
 */
class ManagedInstancesLocalStorageConfiguration extends Shape
{
    /**
     * @param array{useLocalStorage?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
