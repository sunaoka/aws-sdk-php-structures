<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property list<Shapes\ParticipantTokenConfiguration>|null $participantTokenConfigurations
 * @property array<string, string>|null $tags
 * @property Shapes\AutoParticipantRecordingConfiguration|null $autoParticipantRecordingConfiguration
 */
class CreateStageRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     participantTokenConfigurations?: list<Shapes\ParticipantTokenConfiguration>|null,
     *     tags?: array<string, string>|null,
     *     autoParticipantRecordingConfiguration?: Shapes\AutoParticipantRecordingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
