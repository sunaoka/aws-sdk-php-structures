<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 0>|null $BreakoutCode
 * @property string|null $DistributorId
 */
class NielsenConfiguration extends Shape
{
    /**
     * @param array{
     *     BreakoutCode?: int<0, 0>|null,
     *     DistributorId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
