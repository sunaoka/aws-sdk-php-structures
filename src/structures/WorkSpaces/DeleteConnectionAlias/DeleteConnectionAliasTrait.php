<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeleteConnectionAlias;

trait DeleteConnectionAliasTrait
{
    /**
     * @param DeleteConnectionAliasRequest $args
     * @return DeleteConnectionAliasResponse
     */
    public function deleteConnectionAlias(DeleteConnectionAliasRequest $args)
    {
        $result = parent::deleteConnectionAlias($args->toArray());
        return new DeleteConnectionAliasResponse($result->toArray());
    }
}
