<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetVariables;

trait GetVariablesTrait
{
    /**
     * @param GetVariablesRequest $args
     * @return GetVariablesResponse
     */
    public function getVariables(GetVariablesRequest $args)
    {
        $result = parent::getVariables($args->toArray());
        return new GetVariablesResponse($result->toArray());
    }
}
