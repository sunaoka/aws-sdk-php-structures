<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\UpdateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $storageConfigurationArn
 * @property list<'AUDIO_VIDEO'|'AUDIO_ONLY'|'NONE'>|null $mediaTypes
 * @property ParticipantThumbnailConfiguration|null $thumbnailConfiguration
 * @property int<0, 300>|null $recordingReconnectWindowSeconds
 */
class AutoParticipantRecordingConfiguration extends Shape
{
    /**
     * @param array{
     *     storageConfigurationArn: string,
     *     mediaTypes?: list<'AUDIO_VIDEO'|'AUDIO_ONLY'|'NONE'>|null,
     *     thumbnailConfiguration?: ParticipantThumbnailConfiguration|null,
     *     recordingReconnectWindowSeconds?: int<0, 300>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
