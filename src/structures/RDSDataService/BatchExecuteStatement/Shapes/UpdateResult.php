<?php

namespace Sunaoka\Aws\Structures\RDSDataService\BatchExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Field>|null $generatedFields
 */
class UpdateResult extends Shape
{
    /**
     * @param array{generatedFields?: list<Field>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
