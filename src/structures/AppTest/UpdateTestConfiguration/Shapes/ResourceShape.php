<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property ResourceType $type
 */
class ResourceShape extends Shape
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
