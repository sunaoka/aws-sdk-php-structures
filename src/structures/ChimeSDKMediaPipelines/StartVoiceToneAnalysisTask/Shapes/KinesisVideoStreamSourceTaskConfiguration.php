<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\StartVoiceToneAnalysisTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamArn
 * @property int<0, 1> $ChannelId
 * @property string $FragmentNumber
 */
class KinesisVideoStreamSourceTaskConfiguration extends Shape
{
    /**
     * @param array{
     *     StreamArn: string,
     *     ChannelId: int<0, 1>,
     *     FragmentNumber?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
