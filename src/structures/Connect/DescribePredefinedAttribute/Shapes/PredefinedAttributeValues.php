<?php

namespace Sunaoka\Aws\Structures\Connect\DescribePredefinedAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $StringList
 */
class PredefinedAttributeValues extends Shape
{
    /**
     * @param array{StringList?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
