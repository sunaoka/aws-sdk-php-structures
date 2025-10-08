<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldValue> $fields
 */
class CustomContent extends Shape
{
    /**
     * @param array{fields: list<FieldValue>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
