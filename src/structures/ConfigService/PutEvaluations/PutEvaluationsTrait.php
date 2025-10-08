<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutEvaluations;

trait PutEvaluationsTrait
{
    /**
     * @param PutEvaluationsRequest $args
     * @return PutEvaluationsResponse
     */
    public function putEvaluations(PutEvaluationsRequest $args)
    {
        $result = parent::putEvaluations($args->toArray());
        return new PutEvaluationsResponse($result->toArray());
    }
}
