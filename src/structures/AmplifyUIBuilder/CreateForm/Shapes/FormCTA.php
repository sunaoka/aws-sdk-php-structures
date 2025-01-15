<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'top'|'bottom'|'top_and_bottom'|null $position
 * @property FormButton|null $clear
 * @property FormButton|null $cancel
 * @property FormButton|null $submit
 */
class FormCTA extends Shape
{
    /**
     * @param array{
     *     position?: 'top'|'bottom'|'top_and_bottom'|null,
     *     clear?: FormButton|null,
     *     cancel?: FormButton|null,
     *     submit?: FormButton|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
