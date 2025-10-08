<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListResourceEvaluations;

trait ListResourceEvaluationsTrait
{
    /**
     * @param ListResourceEvaluationsRequest $args
     * @return ListResourceEvaluationsResponse
     */
    public function listResourceEvaluations(ListResourceEvaluationsRequest $args)
    {
        $result = parent::listResourceEvaluations($args->toArray());
        return new ListResourceEvaluationsResponse($result->toArray());
    }
}
