<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportForms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $excluded
 * @property string $children
 * @property FieldPosition $position
 */
class FormButton extends Shape
{
    /**
     * @param array{
     *     excluded?: bool,
     *     children?: string,
     *     position?: FieldPosition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
