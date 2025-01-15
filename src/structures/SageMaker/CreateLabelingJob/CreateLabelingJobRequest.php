<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateLabelingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelingJobName
 * @property string $LabelAttributeName
 * @property Shapes\LabelingJobInputConfig $InputConfig
 * @property Shapes\LabelingJobOutputConfig $OutputConfig
 * @property string $RoleArn
 * @property string|null $LabelCategoryConfigS3Uri
 * @property Shapes\LabelingJobStoppingConditions|null $StoppingConditions
 * @property Shapes\LabelingJobAlgorithmsConfig|null $LabelingJobAlgorithmsConfig
 * @property Shapes\HumanTaskConfig $HumanTaskConfig
 * @property list<Shapes\Tag>|null $Tags
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
     *     LabelCategoryConfigS3Uri?: string|null,
     *     StoppingConditions?: Shapes\LabelingJobStoppingConditions|null,
     *     LabelingJobAlgorithmsConfig?: Shapes\LabelingJobAlgorithmsConfig|null,
     *     HumanTaskConfig: Shapes\HumanTaskConfig,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
