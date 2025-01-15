<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FormStyleConfig|null $horizontalGap
 * @property FormStyleConfig|null $verticalGap
 * @property FormStyleConfig|null $outerPadding
 */
class FormStyle extends Shape
{
    /**
     * @param array{
     *     horizontalGap?: FormStyleConfig|null,
     *     verticalGap?: FormStyleConfig|null,
     *     outerPadding?: FormStyleConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
