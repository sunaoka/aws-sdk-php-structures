<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $parameterName
 * @property string $parameterValue
 */
class SlurmCustomSetting extends Shape
{
    /**
     * @param array{
     *     parameterName: string,
     *     parameterValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
