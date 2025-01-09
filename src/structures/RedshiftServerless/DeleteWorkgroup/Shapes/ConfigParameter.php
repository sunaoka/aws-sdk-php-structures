<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteWorkgroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $parameterKey
 * @property string $parameterValue
 */
class ConfigParameter extends Shape
{
    /**
     * @param array{
     *     parameterKey?: string,
     *     parameterValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
