<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListRobots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property list<string>|null $values
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
