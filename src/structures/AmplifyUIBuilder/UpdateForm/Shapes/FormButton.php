<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $excluded
 * @property string|null $children
 * @property FieldPosition|null $position
 */
class FormButton extends Shape
{
    /**
     * @param array{
     *     excluded?: bool|null,
     *     children?: string|null,
     *     position?: FieldPosition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
