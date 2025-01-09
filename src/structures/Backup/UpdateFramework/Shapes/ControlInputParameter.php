<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateFramework\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterName
 * @property string $ParameterValue
 */
class ControlInputParameter extends Shape
{
    /**
     * @param array{
     *     ParameterName?: string,
     *     ParameterValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
