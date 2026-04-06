<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldValue> $fields
 */
class CustomUpdateContent extends Shape
{
    /**
     * @param array{fields: list<FieldValue>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
