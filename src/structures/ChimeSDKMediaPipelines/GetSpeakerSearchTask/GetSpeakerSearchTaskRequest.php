<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetSpeakerSearchTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string $SpeakerSearchTaskId
 */
class GetSpeakerSearchTaskRequest extends Request
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
