<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextFieldControlDisplayOptions|null $DisplayOptions
 */
class DefaultTextFieldControlOptions extends Shape
{
    /**
     * @param array{DisplayOptions?: TextFieldControlDisplayOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
