<?php

namespace Sunaoka\Aws\Structures\DataPipeline\EvaluateExpression;

trait EvaluateExpressionTrait
{
    /**
     * @param EvaluateExpressionRequest $args
     * @return EvaluateExpressionResponse
     */
    public function evaluateExpression(EvaluateExpressionRequest $args)
    {
        $result = parent::evaluateExpression($args->toArray());
        return new EvaluateExpressionResponse($result->toArray());
    }
}
