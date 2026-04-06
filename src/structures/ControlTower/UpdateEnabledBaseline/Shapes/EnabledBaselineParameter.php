<?php

namespace Sunaoka\Aws\Structures\ControlTower\UpdateEnabledBaseline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property EnabledBaselineParameterDocument $value
 */
class EnabledBaselineParameter extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value: EnabledBaselineParameterDocument
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
