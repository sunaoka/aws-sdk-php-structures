<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchUpdateCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldIdentifierUnion $fieldIdentifier
 * @property FieldValueUnion $value
 */
class FieldValueInput extends Shape
{
    /**
     * @param array{
     *     fieldIdentifier: FieldIdentifierUnion,
     *     value: FieldValueUnion
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
