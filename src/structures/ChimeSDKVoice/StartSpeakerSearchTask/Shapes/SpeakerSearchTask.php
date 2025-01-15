<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\StartSpeakerSearchTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SpeakerSearchTaskId
 * @property string|null $SpeakerSearchTaskStatus
 * @property CallDetails|null $CallDetails
 * @property SpeakerSearchDetails|null $SpeakerSearchDetails
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $StartedTimestamp
 * @property string|null $StatusMessage
 */
class SpeakerSearchTask extends Shape
{
    /**
     * @param array{
     *     SpeakerSearchTaskId?: string|null,
     *     SpeakerSearchTaskStatus?: string|null,
     *     CallDetails?: CallDetails|null,
     *     SpeakerSearchDetails?: SpeakerSearchDetails|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     StartedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
