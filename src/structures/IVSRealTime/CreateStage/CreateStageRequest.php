<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<Shapes\ParticipantTokenConfiguration> $participantTokenConfigurations
 * @property array<string, string> $tags
 * @property Shapes\AutoParticipantRecordingConfiguration $autoParticipantRecordingConfiguration
 */
class CreateStageRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     participantTokenConfigurations?: list<Shapes\ParticipantTokenConfiguration>,
     *     tags?: array<string, string>,
     *     autoParticipantRecordingConfiguration?: Shapes\AutoParticipantRecordingConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
