<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLabelingJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LabelingJobName
 * @property string $LabelingJobArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'Initializing'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $LabelingJobStatus
 * @property LabelCounters $LabelCounters
 * @property string $WorkteamArn
 * @property string|null $PreHumanTaskLambdaArn
 * @property string|null $AnnotationConsolidationLambdaArn
 * @property string|null $FailureReason
 * @property LabelingJobOutput|null $LabelingJobOutput
 * @property LabelingJobInputConfig|null $InputConfig
 */
class LabelingJobSummary extends Shape
{
    /**
     * @param array{
     *     LabelingJobName: string,
     *     LabelingJobArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     LabelingJobStatus: 'Initializing'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     LabelCounters: LabelCounters,
     *     WorkteamArn: string,
     *     PreHumanTaskLambdaArn?: string|null,
     *     AnnotationConsolidationLambdaArn?: string|null,
     *     FailureReason?: string|null,
     *     LabelingJobOutput?: LabelingJobOutput|null,
     *     InputConfig?: LabelingJobInputConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
