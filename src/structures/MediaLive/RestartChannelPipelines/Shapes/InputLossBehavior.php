<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $BlackFrameMsec
 * @property string|null $InputLossImageColor
 * @property InputLocation|null $InputLossImageSlate
 * @property 'COLOR'|'SLATE'|null $InputLossImageType
 * @property int|null $RepeatFrameMsec
 */
class InputLossBehavior extends Shape
{
    /**
     * @param array{
     *     BlackFrameMsec?: int|null,
     *     InputLossImageColor?: string|null,
     *     InputLossImageSlate?: InputLocation|null,
     *     InputLossImageType?: 'COLOR'|'SLATE'|null,
     *     RepeatFrameMsec?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
