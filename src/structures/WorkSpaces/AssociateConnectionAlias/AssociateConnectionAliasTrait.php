<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\AssociateConnectionAlias;

trait AssociateConnectionAliasTrait
{
    /**
     * @param AssociateConnectionAliasRequest $args
     * @return AssociateConnectionAliasResponse
     */
    public function associateConnectionAlias(AssociateConnectionAliasRequest $args)
    {
        $result = parent::associateConnectionAlias($args->toArray());
        return new AssociateConnectionAliasResponse($result->toArray());
    }
}
