<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateLabelingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelingJobName
 * @property string $LabelAttributeName
 * @property Shapes\LabelingJobInputConfig $InputConfig
 * @property Shapes\LabelingJobOutputConfig $OutputConfig
 * @property string $RoleArn
 * @property string $LabelCategoryConfigS3Uri
 * @property Shapes\LabelingJobStoppingConditions $StoppingConditions
 * @property Shapes\LabelingJobAlgorithmsConfig $LabelingJobAlgorithmsConfig
 * @property Shapes\HumanTaskConfig $HumanTaskConfig
 * @property list<Shapes\Tag> $Tags
 */
class CreateLabelingJobRequest extends Request
{
    /**
     * @param array{
     *     LabelingJobName: string,
     *     LabelAttributeName: string,
     *     InputConfig: Shapes\LabelingJobInputConfig,
     *     OutputConfig: Shapes\LabelingJobOutputConfig,
     *     RoleArn: string,
     *     LabelCategoryConfigS3Uri?: string,
     *     StoppingConditions?: Shapes\LabelingJobStoppingConditions,
     *     LabelingJobAlgorithmsConfig?: Shapes\LabelingJobAlgorithmsConfig,
     *     HumanTaskConfig: Shapes\HumanTaskConfig,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
