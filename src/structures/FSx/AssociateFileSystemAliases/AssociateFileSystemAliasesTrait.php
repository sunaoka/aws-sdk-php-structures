<?php

namespace Sunaoka\Aws\Structures\FSx\AssociateFileSystemAliases;

trait AssociateFileSystemAliasesTrait
{
    /**
     * @param AssociateFileSystemAliasesRequest $args
     * @return AssociateFileSystemAliasesResponse
     */
    public function associateFileSystemAliases(AssociateFileSystemAliasesRequest $args)
    {
        $result = parent::associateFileSystemAliases($args->toArray());
        return new AssociateFileSystemAliasesResponse($result->toArray());
    }
}
