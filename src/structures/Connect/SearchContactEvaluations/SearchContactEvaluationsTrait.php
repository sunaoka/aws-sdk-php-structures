<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactEvaluations;

trait SearchContactEvaluationsTrait
{
    /**
     * @param SearchContactEvaluationsRequest $args
     * @return SearchContactEvaluationsResponse
     */
    public function searchContactEvaluations(SearchContactEvaluationsRequest $args)
    {
        $result = parent::searchContactEvaluations($args->toArray());
        return new SearchContactEvaluationsResponse($result->toArray());
    }
}
