<?php

namespace Sunaoka\Aws\Structures\FSx\DisassociateFileSystemAliases;

trait DisassociateFileSystemAliasesTrait
{
    /**
     * @param DisassociateFileSystemAliasesRequest $args
     * @return DisassociateFileSystemAliasesResponse
     */
    public function disassociateFileSystemAliases(DisassociateFileSystemAliasesRequest $args)
    {
        $result = parent::disassociateFileSystemAliases($args->toArray());
        return new DisassociateFileSystemAliasesResponse($result->toArray());
    }
}
