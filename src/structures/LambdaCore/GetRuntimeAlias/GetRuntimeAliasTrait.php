<?php

namespace Sunaoka\Aws\Structures\LambdaCore\GetRuntimeAlias;

trait GetRuntimeAliasTrait
{
    /**
     * @param GetRuntimeAliasRequest $args
     * @return GetRuntimeAliasResponse
     */
    public function getRuntimeAlias(GetRuntimeAliasRequest $args)
    {
        $result = parent::getRuntimeAlias($args->toArray());
        return new GetRuntimeAliasResponse($result->toArray());
    }
}
