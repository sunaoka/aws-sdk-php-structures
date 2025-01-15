<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERPOLATE'|'SHOW_AS_ZERO'|'SHOW_AS_BLANK'|null $TreatmentOption
 */
class MissingDataConfiguration extends Shape
{
    /**
     * @param array{TreatmentOption?: 'INTERPOLATE'|'SHOW_AS_ZERO'|'SHOW_AS_BLANK'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
