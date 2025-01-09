<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceToneAnalysisTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VoiceToneAnalysisTaskId
 * @property string $VoiceToneAnalysisTaskStatus
 * @property CallDetails $CallDetails
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 * @property \Aws\Api\DateTimeResult $StartedTimestamp
 * @property string $StatusMessage
 */
class VoiceToneAnalysisTask extends Shape
{
    /**
     * @param array{
     *     VoiceToneAnalysisTaskId?: string,
     *     VoiceToneAnalysisTaskStatus?: string,
     *     CallDetails?: CallDetails,
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
