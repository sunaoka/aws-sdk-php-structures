<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DisassociateConnectionAlias;

trait DisassociateConnectionAliasTrait
{
    /**
     * @param DisassociateConnectionAliasRequest $args
     * @return DisassociateConnectionAliasResponse
     */
    public function disassociateConnectionAlias(DisassociateConnectionAliasRequest $args)
    {
        $result = parent::disassociateConnectionAlias($args->toArray());
        return new DisassociateConnectionAliasResponse($result->toArray());
    }
}
