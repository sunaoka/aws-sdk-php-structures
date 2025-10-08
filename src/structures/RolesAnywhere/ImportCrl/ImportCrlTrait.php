<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ImportCrl;

trait ImportCrlTrait
{
    /**
     * @param ImportCrlRequest $args
     * @return ImportCrlResponse
     */
    public function importCrl(ImportCrlRequest $args)
    {
        $result = parent::importCrl($args->toArray());
        return new ImportCrlResponse($result->toArray());
    }
}
