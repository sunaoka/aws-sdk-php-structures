<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $name
 * @property string|null $activeSessionId
 * @property array<string, string>|null $tags
 * @property AutoParticipantRecordingConfiguration|null $autoParticipantRecordingConfiguration
 * @property StageEndpoints|null $endpoints
 */
class Stage extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     activeSessionId?: string|null,
     *     tags?: array<string, string>|null,
     *     autoParticipantRecordingConfiguration?: AutoParticipantRecordingConfiguration|null,
     *     endpoints?: StageEndpoints|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
