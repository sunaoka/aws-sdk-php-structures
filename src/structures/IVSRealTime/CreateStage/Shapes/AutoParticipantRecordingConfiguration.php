<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $storageConfigurationArn
 * @property list<'AUDIO_VIDEO'|'AUDIO_ONLY'>|null $mediaTypes
 */
class AutoParticipantRecordingConfiguration extends Shape
{
    /**
     * @param array{
     *     storageConfigurationArn: string,
     *     mediaTypes?: list<'AUDIO_VIDEO'|'AUDIO_ONLY'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
