<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<32, 8192> $Height
 * @property int<32, 8192> $Width
 */
class ForceIncludeRenditionSize extends Shape
{
    /**
     * @param array{
     *     Height?: int<32, 8192>,
     *     Width?: int<32, 8192>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
