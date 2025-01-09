<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 0> $BreakoutCode
 * @property string $DistributorId
 */
class NielsenConfiguration extends Shape
{
    /**
     * @param array{
     *     BreakoutCode?: int<0, 0>,
     *     DistributorId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
