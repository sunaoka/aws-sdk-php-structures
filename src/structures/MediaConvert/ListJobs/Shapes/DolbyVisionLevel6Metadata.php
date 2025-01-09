<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535> $MaxCll
 * @property int<0, 65535> $MaxFall
 */
class DolbyVisionLevel6Metadata extends Shape
{
    /**
     * @param array{
     *     MaxCll?: int<0, 65535>,
     *     MaxFall?: int<0, 65535>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
