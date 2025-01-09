<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BlackFrameMsec
 * @property string $InputLossImageColor
 * @property InputLocation $InputLossImageSlate
 * @property 'COLOR'|'SLATE' $InputLossImageType
 * @property int $RepeatFrameMsec
 */
class InputLossBehavior extends Shape
{
    /**
     * @param array{
     *     BlackFrameMsec?: int,
     *     InputLossImageColor?: string,
     *     InputLossImageSlate?: InputLocation,
     *     InputLossImageType?: 'COLOR'|'SLATE',
     *     RepeatFrameMsec?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
