<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateCalculatedAttributeDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Start
 * @property int $End
 */
class ValueRange extends Shape
{
    /**
     * @param array{
     *     Start: int,
     *     End: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
