<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListCommonControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ObjectiveResourceFilter> $Objectives
 */
class CommonControlFilter extends Shape
{
    /**
     * @param array{Objectives?: list<ObjectiveResourceFilter>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
