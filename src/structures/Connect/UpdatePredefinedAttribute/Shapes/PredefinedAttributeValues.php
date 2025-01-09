<?php

namespace Sunaoka\Aws\Structures\Connect\UpdatePredefinedAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $StringList
 */
class PredefinedAttributeValues extends Shape
{
    /**
     * @param array{StringList?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
