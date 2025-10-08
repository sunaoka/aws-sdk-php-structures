<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactEvaluation;

trait UpdateContactEvaluationTrait
{
    /**
     * @param UpdateContactEvaluationRequest $args
     * @return UpdateContactEvaluationResponse
     */
    public function updateContactEvaluation(UpdateContactEvaluationRequest $args)
    {
        $result = parent::updateContactEvaluation($args->toArray());
        return new UpdateContactEvaluationResponse($result->toArray());
    }
}
