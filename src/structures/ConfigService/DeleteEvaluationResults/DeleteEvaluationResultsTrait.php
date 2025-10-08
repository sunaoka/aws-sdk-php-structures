<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteEvaluationResults;

trait DeleteEvaluationResultsTrait
{
    /**
     * @param DeleteEvaluationResultsRequest $args
     * @return DeleteEvaluationResultsResponse
     */
    public function deleteEvaluationResults(DeleteEvaluationResultsRequest $args)
    {
        $result = parent::deleteEvaluationResults($args->toArray());
        return new DeleteEvaluationResultsResponse($result->toArray());
    }
}
