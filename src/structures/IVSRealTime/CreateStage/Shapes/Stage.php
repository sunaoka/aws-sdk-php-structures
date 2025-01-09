<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $activeSessionId
 * @property array<string, string> $tags
 * @property AutoParticipantRecordingConfiguration $autoParticipantRecordingConfiguration
 * @property StageEndpoints $endpoints
 */
class Stage extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string,
     *     activeSessionId?: string,
     *     tags?: array<string, string>,
     *     autoParticipantRecordingConfiguration?: AutoParticipantRecordingConfiguration,
     *     endpoints?: StageEndpoints
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
