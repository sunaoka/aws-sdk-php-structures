<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioConcatenationConfiguration $Audio
 * @property VideoConcatenationConfiguration $Video
 * @property ContentConcatenationConfiguration $Content
 * @property DataChannelConcatenationConfiguration $DataChannel
 * @property TranscriptionMessagesConcatenationConfiguration $TranscriptionMessages
 * @property MeetingEventsConcatenationConfiguration $MeetingEvents
 * @property CompositedVideoConcatenationConfiguration $CompositedVideo
 */
class ArtifactsConcatenationConfiguration extends Shape
{
    /**
     * @param array{
     *     Audio: AudioConcatenationConfiguration,
     *     Video: VideoConcatenationConfiguration,
     *     Content: ContentConcatenationConfiguration,
     *     DataChannel: DataChannelConcatenationConfiguration,
     *     TranscriptionMessages: TranscriptionMessagesConcatenationConfiguration,
     *     MeetingEvents: MeetingEventsConcatenationConfiguration,
     *     CompositedVideo: CompositedVideoConcatenationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
