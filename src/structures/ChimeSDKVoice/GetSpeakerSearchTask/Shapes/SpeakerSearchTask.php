<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetSpeakerSearchTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SpeakerSearchTaskId
 * @property string $SpeakerSearchTaskStatus
 * @property CallDetails $CallDetails
 * @property SpeakerSearchDetails $SpeakerSearchDetails
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 * @property \Aws\Api\DateTimeResult $StartedTimestamp
 * @property string $StatusMessage
 */
class SpeakerSearchTask extends Shape
{
    /**
     * @param array{
     *     SpeakerSearchTaskId?: string,
     *     SpeakerSearchTaskStatus?: string,
     *     CallDetails?: CallDetails,
     *     SpeakerSearchDetails?: SpeakerSearchDetails,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     StartedTimestamp?: \Aws\Api\DateTimeResult,
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
