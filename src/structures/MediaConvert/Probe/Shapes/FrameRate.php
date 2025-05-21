<?php

namespace Sunaoka\Aws\Structures\MediaConvert\Probe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Denominator
 * @property int|null $Numerator
 */
class FrameRate extends Shape
{
    /**
     * @param array{
     *     Denominator?: int|null,
     *     Numerator?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
