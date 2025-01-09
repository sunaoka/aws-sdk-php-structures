<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property ResourceType $type
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: ResourceType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
