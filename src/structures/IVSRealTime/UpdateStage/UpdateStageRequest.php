<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\UpdateStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $name
 * @property Shapes\AutoParticipantRecordingConfiguration $autoParticipantRecordingConfiguration
 */
class UpdateStageRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string,
     *     autoParticipantRecordingConfiguration?: Shapes\AutoParticipantRecordingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
