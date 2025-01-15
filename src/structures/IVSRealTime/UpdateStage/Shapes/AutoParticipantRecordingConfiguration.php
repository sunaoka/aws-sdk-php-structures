<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\UpdateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $storageConfigurationArn
 * @property list<'AUDIO_VIDEO'|'AUDIO_ONLY'|'NONE'>|null $mediaTypes
 * @property ParticipantThumbnailConfiguration|null $thumbnailConfiguration
 */
class AutoParticipantRecordingConfiguration extends Shape
{
    /**
     * @param array{
     *     storageConfigurationArn: string,
     *     mediaTypes?: list<'AUDIO_VIDEO'|'AUDIO_ONLY'|'NONE'>|null,
     *     thumbnailConfiguration?: ParticipantThumbnailConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
