<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactRecording;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property string $InitialContactId
 * @property Shapes\VoiceRecordingConfiguration $VoiceRecordingConfiguration
 */
class StartContactRecordingRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     InitialContactId: string,
     *     VoiceRecordingConfiguration: Shapes\VoiceRecordingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
