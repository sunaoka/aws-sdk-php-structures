<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceRecommendationsJobSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING'|'DELETED' $Status
 * @property 'BENCHMARK' $StepType
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListInferenceRecommendationsJobStepsRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING'|'DELETED',
     *     StepType?: 'BENCHMARK',
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
