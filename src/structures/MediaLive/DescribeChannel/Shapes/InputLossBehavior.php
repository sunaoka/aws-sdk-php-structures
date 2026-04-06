<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 1000000>|null $BlackFrameMsec
 * @property string|null $InputLossImageColor
 * @property InputLocation|null $InputLossImageSlate
 * @property 'COLOR'|'SLATE'|null $InputLossImageType
 * @property int<0, 1000000>|null $RepeatFrameMsec
 */
class InputLossBehavior extends Shape
{
    /**
     * @param array{
     *     BlackFrameMsec?: int<0, 1000000>|null,
     *     InputLossImageColor?: string|null,
     *     InputLossImageSlate?: InputLocation|null,
     *     InputLossImageType?: 'COLOR'|'SLATE'|null,
     *     RepeatFrameMsec?: int<0, 1000000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
