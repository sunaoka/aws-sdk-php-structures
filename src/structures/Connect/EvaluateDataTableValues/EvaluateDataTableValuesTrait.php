<?php

namespace Sunaoka\Aws\Structures\Connect\EvaluateDataTableValues;

trait EvaluateDataTableValuesTrait
{
    /**
     * @param EvaluateDataTableValuesRequest $args
     * @return EvaluateDataTableValuesResponse
     */
    public function evaluateDataTableValues(EvaluateDataTableValuesRequest $args)
    {
        $result = parent::evaluateDataTableValues($args->toArray());
        return new EvaluateDataTableValuesResponse($result->toArray());
    }
}
