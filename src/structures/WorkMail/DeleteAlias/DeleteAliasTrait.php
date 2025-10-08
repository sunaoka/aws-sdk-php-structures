<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteAlias;

trait DeleteAliasTrait
{
    /**
     * @param DeleteAliasRequest $args
     * @return DeleteAliasResponse
     */
    public function deleteAlias(DeleteAliasRequest $args)
    {
        $result = parent::deleteAlias($args->toArray());
        return new DeleteAliasResponse($result->toArray());
    }
}
