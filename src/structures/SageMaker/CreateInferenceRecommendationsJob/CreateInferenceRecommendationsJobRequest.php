<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRecommendationsJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property 'Default'|'Advanced' $JobType
 * @property string $RoleArn
 * @property Shapes\RecommendationJobInputConfig $InputConfig
 * @property string|null $JobDescription
 * @property Shapes\RecommendationJobStoppingConditions|null $StoppingConditions
 * @property Shapes\RecommendationJobOutputConfig|null $OutputConfig
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateInferenceRecommendationsJobRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     JobType: 'Default'|'Advanced',
     *     RoleArn: string,
     *     InputConfig: Shapes\RecommendationJobInputConfig,
     *     JobDescription?: string|null,
     *     StoppingConditions?: Shapes\RecommendationJobStoppingConditions|null,
     *     OutputConfig?: Shapes\RecommendationJobOutputConfig|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
