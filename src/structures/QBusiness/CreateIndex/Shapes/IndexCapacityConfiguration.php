<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $units
 */
class IndexCapacityConfiguration extends Shape
{
    /**
     * @param array{units?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
