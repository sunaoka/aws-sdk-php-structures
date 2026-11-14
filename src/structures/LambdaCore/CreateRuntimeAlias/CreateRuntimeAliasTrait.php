<?php

namespace Sunaoka\Aws\Structures\LambdaCore\CreateRuntimeAlias;

trait CreateRuntimeAliasTrait
{
    /**
     * @param CreateRuntimeAliasRequest $args
     * @return CreateRuntimeAliasResponse
     */
    public function createRuntimeAlias(CreateRuntimeAliasRequest $args)
    {
        $result = parent::createRuntimeAlias($args->toArray());
        return new CreateRuntimeAliasResponse($result->toArray());
    }
}
