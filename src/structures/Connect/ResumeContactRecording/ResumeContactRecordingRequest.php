<?php

namespace Sunaoka\Aws\Structures\Connect\ResumeContactRecording;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property string $InitialContactId
 * @property 'AGENT'|'IVR'|'SCREEN'|null $ContactRecordingType
 */
class ResumeContactRecordingRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     InitialContactId: string,
     *     ContactRecordingType?: 'AGENT'|'IVR'|'SCREEN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
