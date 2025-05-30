<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $storageConfigurationArn
 * @property list<'AUDIO_VIDEO'|'AUDIO_ONLY'|'NONE'>|null $mediaTypes
 * @property ParticipantThumbnailConfiguration|null $thumbnailConfiguration
 * @property int<0, 300>|null $recordingReconnectWindowSeconds
 * @property ParticipantRecordingHlsConfiguration|null $hlsConfiguration
 * @property bool|null $recordParticipantReplicas
 */
class AutoParticipantRecordingConfiguration extends Shape
{
    /**
     * @param array{
     *     storageConfigurationArn: string,
     *     mediaTypes?: list<'AUDIO_VIDEO'|'AUDIO_ONLY'|'NONE'>|null,
     *     thumbnailConfiguration?: ParticipantThumbnailConfiguration|null,
     *     recordingReconnectWindowSeconds?: int<0, 300>|null,
     *     hlsConfiguration?: ParticipantRecordingHlsConfiguration|null,
     *     recordParticipantReplicas?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
