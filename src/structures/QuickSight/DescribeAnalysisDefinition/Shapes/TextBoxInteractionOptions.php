<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextBoxMenuOption|null $TextBoxMenuOption
 */
class TextBoxInteractionOptions extends Shape
{
    /**
     * @param array{TextBoxMenuOption?: TextBoxMenuOption|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
