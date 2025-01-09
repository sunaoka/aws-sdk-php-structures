<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Height
 * @property int $Width
 */
class ForceIncludeRenditionSize extends Shape
{
    /**
     * @param array{
     *     Height?: int,
     *     Width?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
