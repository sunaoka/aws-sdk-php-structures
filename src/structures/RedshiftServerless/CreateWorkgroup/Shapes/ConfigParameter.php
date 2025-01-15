<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateWorkgroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $parameterKey
 * @property string|null $parameterValue
 */
class ConfigParameter extends Shape
{
    /**
     * @param array{
     *     parameterKey?: string|null,
     *     parameterValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
