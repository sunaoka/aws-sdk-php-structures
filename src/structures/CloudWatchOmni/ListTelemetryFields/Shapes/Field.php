<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListTelemetryFields\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<Field>|null $children
 */
class Field extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     children?: list<Field>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
