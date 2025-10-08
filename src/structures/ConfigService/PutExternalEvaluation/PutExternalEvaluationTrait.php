<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutExternalEvaluation;

trait PutExternalEvaluationTrait
{
    /**
     * @param PutExternalEvaluationRequest $args
     * @return PutExternalEvaluationResponse
     */
    public function putExternalEvaluation(PutExternalEvaluationRequest $args)
    {
        $result = parent::putExternalEvaluation($args->toArray());
        return new PutExternalEvaluationResponse($result->toArray());
    }
}
