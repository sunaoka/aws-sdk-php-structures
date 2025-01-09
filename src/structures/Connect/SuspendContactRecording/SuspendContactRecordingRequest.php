<?php

namespace Sunaoka\Aws\Structures\Connect\SuspendContactRecording;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property string $InitialContactId
 * @property 'AGENT'|'IVR'|'SCREEN' $ContactRecordingType
 */
class SuspendContactRecordingRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     InitialContactId: string,
     *     ContactRecordingType?: 'AGENT'|'IVR'|'SCREEN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
