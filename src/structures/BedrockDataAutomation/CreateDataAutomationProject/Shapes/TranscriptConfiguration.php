<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SpeakerLabelingConfiguration|null $speakerLabeling
 * @property ChannelLabelingConfiguration|null $channelLabeling
 */
class TranscriptConfiguration extends Shape
{
    /**
     * @param array{
     *     speakerLabeling?: SpeakerLabelingConfiguration|null,
     *     channelLabeling?: ChannelLabelingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
