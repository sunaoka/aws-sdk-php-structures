<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FormStyleConfig $horizontalGap
 * @property FormStyleConfig $verticalGap
 * @property FormStyleConfig $outerPadding
 */
class FormStyle extends Shape
{
    /**
     * @param array{
     *     horizontalGap?: FormStyleConfig,
     *     verticalGap?: FormStyleConfig,
     *     outerPadding?: FormStyleConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
