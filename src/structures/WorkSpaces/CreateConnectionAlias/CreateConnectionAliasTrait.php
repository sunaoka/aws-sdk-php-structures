<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateConnectionAlias;

trait CreateConnectionAliasTrait
{
    /**
     * @param CreateConnectionAliasRequest $args
     * @return CreateConnectionAliasResponse
     */
    public function createConnectionAlias(CreateConnectionAliasRequest $args)
    {
        $result = parent::createConnectionAlias($args->toArray());
        return new CreateConnectionAliasResponse($result->toArray());
    }
}
