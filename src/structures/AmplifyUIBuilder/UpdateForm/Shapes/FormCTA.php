<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'top'|'bottom'|'top_and_bottom' $position
 * @property FormButton $clear
 * @property FormButton $cancel
 * @property FormButton $submit
 */
class FormCTA extends Shape
{
    /**
     * @param array{
     *     position?: 'top'|'bottom'|'top_and_bottom',
     *     clear?: FormButton,
     *     cancel?: FormButton,
     *     submit?: FormButton
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
