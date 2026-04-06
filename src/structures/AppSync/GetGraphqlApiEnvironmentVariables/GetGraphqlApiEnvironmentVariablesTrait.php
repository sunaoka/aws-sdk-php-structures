<?php

namespace Sunaoka\Aws\Structures\AppSync\GetGraphqlApiEnvironmentVariables;

trait GetGraphqlApiEnvironmentVariablesTrait
{
    /**
     * @param GetGraphqlApiEnvironmentVariablesRequest $args
     * @return GetGraphqlApiEnvironmentVariablesResponse
     */
    public function getGraphqlApiEnvironmentVariables(GetGraphqlApiEnvironmentVariablesRequest $args)
    {
        $result = parent::getGraphqlApiEnvironmentVariables($args->toArray());
        return new GetGraphqlApiEnvironmentVariablesResponse($result->toArray());
    }
}
