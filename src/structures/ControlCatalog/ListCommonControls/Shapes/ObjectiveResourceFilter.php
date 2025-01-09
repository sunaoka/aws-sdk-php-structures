<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListCommonControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 */
class ObjectiveResourceFilter extends Shape
{
    /**
     * @param array{Arn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
