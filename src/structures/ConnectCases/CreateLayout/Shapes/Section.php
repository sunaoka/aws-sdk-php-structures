<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateLayout\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldGroup|null $fieldGroup
 */
class Section extends Shape
{
    /**
     * @param array{fieldGroup?: FieldGroup|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
