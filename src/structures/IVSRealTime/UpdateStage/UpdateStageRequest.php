<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\UpdateStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $name
 * @property Shapes\AutoParticipantRecordingConfiguration|null $autoParticipantRecordingConfiguration
 */
class UpdateStageRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     autoParticipantRecordingConfiguration?: Shapes\AutoParticipantRecordingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
