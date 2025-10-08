<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactEvaluations;

trait ListContactEvaluationsTrait
{
    /**
     * @param ListContactEvaluationsRequest $args
     * @return ListContactEvaluationsResponse
     */
    public function listContactEvaluations(ListContactEvaluationsRequest $args)
    {
        $result = parent::listContactEvaluations($args->toArray());
        return new ListContactEvaluationsResponse($result->toArray());
    }
}
