<?php

namespace Sunaoka\Aws\Structures\AppSync\PutGraphqlApiEnvironmentVariables;

trait PutGraphqlApiEnvironmentVariablesTrait
{
    /**
     * @param PutGraphqlApiEnvironmentVariablesRequest $args
     * @return PutGraphqlApiEnvironmentVariablesResponse
     */
    public function putGraphqlApiEnvironmentVariables(PutGraphqlApiEnvironmentVariablesRequest $args)
    {
        $result = parent::putGraphqlApiEnvironmentVariables($args->toArray());
        return new PutGraphqlApiEnvironmentVariablesResponse($result->toArray());
    }
}
