<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextFieldControlDisplayOptions $DisplayOptions
 */
class DefaultTextFieldControlOptions extends Shape
{
    /**
     * @param array{DisplayOptions?: TextFieldControlDisplayOptions} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
