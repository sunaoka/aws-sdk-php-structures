<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BreakoutCode
 * @property string $DistributorId
 */
class NielsenConfiguration extends Shape
{
    /**
     * @param array{
     *     BreakoutCode?: int,
     *     DistributorId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
