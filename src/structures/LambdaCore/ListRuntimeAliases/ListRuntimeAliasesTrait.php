<?php

namespace Sunaoka\Aws\Structures\LambdaCore\ListRuntimeAliases;

trait ListRuntimeAliasesTrait
{
    /**
     * @param ListRuntimeAliasesRequest $args
     * @return ListRuntimeAliasesResponse
     */
    public function listRuntimeAliases(ListRuntimeAliasesRequest $args)
    {
        $result = parent::listRuntimeAliases($args->toArray());
        return new ListRuntimeAliasesResponse($result->toArray());
    }
}
