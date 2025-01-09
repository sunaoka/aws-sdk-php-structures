<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $units
 */
class IndexCapacityConfiguration extends Shape
{
    /**
     * @param array{units?: int<1, max>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
