<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceRecommendationsJobSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED'|null $Status
 * @property 'BENCHMARK'|null $StepType
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListInferenceRecommendationsJobStepsRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED'|null,
     *     StepType?: 'BENCHMARK'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
