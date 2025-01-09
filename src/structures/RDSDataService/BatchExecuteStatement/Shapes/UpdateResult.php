<?php

namespace Sunaoka\Aws\Structures\RDSDataService\BatchExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Field> $generatedFields
 */
class UpdateResult extends Shape
{
    /**
     * @param array{generatedFields?: list<Field>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
