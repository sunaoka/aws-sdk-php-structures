<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLabelingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Initializing'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $LabelingJobStatus
 * @property Shapes\LabelCounters $LabelCounters
 * @property string $FailureReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $JobReferenceCode
 * @property string $LabelingJobName
 * @property string $LabelingJobArn
 * @property string $LabelAttributeName
 * @property Shapes\LabelingJobInputConfig $InputConfig
 * @property Shapes\LabelingJobOutputConfig $OutputConfig
 * @property string $RoleArn
 * @property string $LabelCategoryConfigS3Uri
 * @property Shapes\LabelingJobStoppingConditions $StoppingConditions
 * @property Shapes\LabelingJobAlgorithmsConfig $LabelingJobAlgorithmsConfig
 * @property Shapes\HumanTaskConfig $HumanTaskConfig
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\LabelingJobOutput $LabelingJobOutput
 */
class DescribeLabelingJobResponse extends Response
{
}
