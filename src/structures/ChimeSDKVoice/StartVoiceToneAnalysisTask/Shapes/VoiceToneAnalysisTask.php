<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\StartVoiceToneAnalysisTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VoiceToneAnalysisTaskId
 * @property string|null $VoiceToneAnalysisTaskStatus
 * @property CallDetails|null $CallDetails
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $StartedTimestamp
 * @property string|null $StatusMessage
 */
class VoiceToneAnalysisTask extends Shape
{
    /**
     * @param array{
     *     VoiceToneAnalysisTaskId?: string|null,
     *     VoiceToneAnalysisTaskStatus?: string|null,
     *     CallDetails?: CallDetails|null,
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
