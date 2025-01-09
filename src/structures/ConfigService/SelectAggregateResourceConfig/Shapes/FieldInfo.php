<?php

namespace Sunaoka\Aws\Structures\ConfigService\SelectAggregateResourceConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 */
class FieldInfo extends Shape
{
    /**
     * @param array{Name?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
