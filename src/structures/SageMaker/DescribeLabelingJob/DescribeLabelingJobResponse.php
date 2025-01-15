<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLabelingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Initializing'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $LabelingJobStatus
 * @property Shapes\LabelCounters $LabelCounters
 * @property string|null $FailureReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $JobReferenceCode
 * @property string $LabelingJobName
 * @property string $LabelingJobArn
 * @property string|null $LabelAttributeName
 * @property Shapes\LabelingJobInputConfig $InputConfig
 * @property Shapes\LabelingJobOutputConfig $OutputConfig
 * @property string $RoleArn
 * @property string|null $LabelCategoryConfigS3Uri
 * @property Shapes\LabelingJobStoppingConditions|null $StoppingConditions
 * @property Shapes\LabelingJobAlgorithmsConfig|null $LabelingJobAlgorithmsConfig
 * @property Shapes\HumanTaskConfig $HumanTaskConfig
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\LabelingJobOutput|null $LabelingJobOutput
 */
class DescribeLabelingJobResponse extends Response
{
}
