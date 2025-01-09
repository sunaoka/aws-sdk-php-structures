<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\StopSpeakerSearchTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string $SpeakerSearchTaskId
 */
class StopSpeakerSearchTaskRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     SpeakerSearchTaskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
