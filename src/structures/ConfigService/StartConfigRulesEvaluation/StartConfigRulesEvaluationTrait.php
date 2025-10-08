<?php

namespace Sunaoka\Aws\Structures\ConfigService\StartConfigRulesEvaluation;

trait StartConfigRulesEvaluationTrait
{
    /**
     * @param StartConfigRulesEvaluationRequest $args
     * @return StartConfigRulesEvaluationResponse
     */
    public function startConfigRulesEvaluation(StartConfigRulesEvaluationRequest $args)
    {
        $result = parent::startConfigRulesEvaluation($args->toArray());
        return new StartConfigRulesEvaluationResponse($result->toArray());
    }
}
