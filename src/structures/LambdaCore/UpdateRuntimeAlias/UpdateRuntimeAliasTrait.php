<?php

namespace Sunaoka\Aws\Structures\LambdaCore\UpdateRuntimeAlias;

trait UpdateRuntimeAliasTrait
{
    /**
     * @param UpdateRuntimeAliasRequest $args
     * @return UpdateRuntimeAliasResponse
     */
    public function updateRuntimeAlias(UpdateRuntimeAliasRequest $args)
    {
        $result = parent::updateRuntimeAlias($args->toArray());
        return new UpdateRuntimeAliasResponse($result->toArray());
    }
}
