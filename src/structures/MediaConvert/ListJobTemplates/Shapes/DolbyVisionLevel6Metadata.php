<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxCll
 * @property int $MaxFall
 */
class DolbyVisionLevel6Metadata extends Shape
{
    /**
     * @param array{
     *     MaxCll?: int,
     *     MaxFall?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
