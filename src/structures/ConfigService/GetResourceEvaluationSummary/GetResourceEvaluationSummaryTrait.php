<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetResourceEvaluationSummary;

trait GetResourceEvaluationSummaryTrait
{
    /**
     * @param GetResourceEvaluationSummaryRequest $args
     * @return GetResourceEvaluationSummaryResponse
     */
    public function getResourceEvaluationSummary(GetResourceEvaluationSummaryRequest $args)
    {
        $result = parent::getResourceEvaluationSummary($args->toArray());
        return new GetResourceEvaluationSummaryResponse($result->toArray());
    }
}
