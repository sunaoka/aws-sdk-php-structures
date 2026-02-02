<?php

namespace Sunaoka\Aws\Structures\Connect\CreateHoursOfOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HoursOfOperationId
 */
class ParentHoursOfOperationConfig extends Shape
{
    /**
     * @param array{HoursOfOperationId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
