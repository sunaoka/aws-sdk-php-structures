<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<32, 8192>|null $Height
 * @property int<32, 8192>|null $Width
 */
class MinTopRenditionSize extends Shape
{
    /**
     * @param array{
     *     Height?: int<32, 8192>|null,
     *     Width?: int<32, 8192>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
