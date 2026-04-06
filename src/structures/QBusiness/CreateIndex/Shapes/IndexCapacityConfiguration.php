<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $units
 */
class IndexCapacityConfiguration extends Shape
{
    /**
     * @param array{units?: int<1, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
