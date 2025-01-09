<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateLayout\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldGroup $fieldGroup
 */
class Section extends Shape
{
    /**
     * @param array{fieldGroup?: FieldGroup} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
