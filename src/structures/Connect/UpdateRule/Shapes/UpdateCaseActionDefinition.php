<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldValue> $Fields
 */
class UpdateCaseActionDefinition extends Shape
{
    /**
     * @param array{Fields: list<FieldValue>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
