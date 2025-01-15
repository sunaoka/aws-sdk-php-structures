<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535>|null $MaxCll
 * @property int<0, 65535>|null $MaxFall
 */
class DolbyVisionLevel6Metadata extends Shape
{
    /**
     * @param array{
     *     MaxCll?: int<0, 65535>|null,
     *     MaxFall?: int<0, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
