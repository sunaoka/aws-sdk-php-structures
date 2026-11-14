<?php

namespace Sunaoka\Aws\Structures\LambdaCore\DeleteRuntimeAlias;

trait DeleteRuntimeAliasTrait
{
    /**
     * @param DeleteRuntimeAliasRequest $args
     * @return DeleteRuntimeAliasResponse
     */
    public function deleteRuntimeAlias(DeleteRuntimeAliasRequest $args)
    {
        $result = parent::deleteRuntimeAlias($args->toArray());
        return new DeleteRuntimeAliasResponse($result->toArray());
    }
}
