<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\StartVoiceToneAnalysisTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamArn
 * @property int $ChannelId
 * @property string $FragmentNumber
 */
class KinesisVideoStreamSourceTaskConfiguration extends Shape
{
    /**
     * @param array{
     *     StreamArn: string,
     *     ChannelId: int,
     *     FragmentNumber?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
