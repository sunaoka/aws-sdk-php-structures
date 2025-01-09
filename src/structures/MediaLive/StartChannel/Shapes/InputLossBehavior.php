<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 1000000> $BlackFrameMsec
 * @property string $InputLossImageColor
 * @property InputLocation $InputLossImageSlate
 * @property 'COLOR'|'SLATE' $InputLossImageType
 * @property int<0, 1000000> $RepeatFrameMsec
 */
class InputLossBehavior extends Shape
{
    /**
     * @param array{
     *     BlackFrameMsec?: int<0, 1000000>,
     *     InputLossImageColor?: string,
     *     InputLossImageSlate?: InputLocation,
     *     InputLossImageType?: 'COLOR'|'SLATE',
     *     RepeatFrameMsec?: int<0, 1000000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
