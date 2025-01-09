<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRecommendationsJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property 'Default'|'Advanced' $JobType
 * @property string $RoleArn
 * @property Shapes\RecommendationJobInputConfig $InputConfig
 * @property string $JobDescription
 * @property Shapes\RecommendationJobStoppingConditions $StoppingConditions
 * @property Shapes\RecommendationJobOutputConfig $OutputConfig
 * @property list<Shapes\Tag> $Tags
 */
class CreateInferenceRecommendationsJobRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     JobType: 'Default'|'Advanced',
     *     RoleArn: string,
     *     InputConfig: Shapes\RecommendationJobInputConfig,
     *     JobDescription?: string,
     *     StoppingConditions?: Shapes\RecommendationJobStoppingConditions,
     *     OutputConfig?: Shapes\RecommendationJobOutputConfig,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
