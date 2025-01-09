<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $storageConfigurationArn
 * @property list<'AUDIO_VIDEO'|'AUDIO_ONLY'|'NONE'> $mediaTypes
 * @property ParticipantThumbnailConfiguration $thumbnailConfiguration
 */
class AutoParticipantRecordingConfiguration extends Shape
{
    /**
     * @param array{
     *     storageConfigurationArn: string,
     *     mediaTypes?: list<'AUDIO_VIDEO'|'AUDIO_ONLY'|'NONE'>,
     *     thumbnailConfiguration?: ParticipantThumbnailConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
