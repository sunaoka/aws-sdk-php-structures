<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeFramework\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParameterName
 * @property string|null $ParameterValue
 */
class ControlInputParameter extends Shape
{
    /**
     * @param array{
     *     ParameterName?: string|null,
     *     ParameterValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
