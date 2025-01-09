<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $hardLimit
 * @property string $name
 * @property int $softLimit
 */
class Ulimit extends Shape
{
    /**
     * @param array{
     *     hardLimit: int,
     *     name: string,
     *     softLimit: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
