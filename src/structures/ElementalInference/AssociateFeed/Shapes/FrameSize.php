<?php

namespace Sunaoka\Aws\Structures\ElementalInference\AssociateFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1280> $widthPixels
 * @property int<1, 720> $heightPixels
 */
class FrameSize extends Shape
{
    /**
     * @param array{
     *     widthPixels: int<1, 1280>,
     *     heightPixels: int<1, 720>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
