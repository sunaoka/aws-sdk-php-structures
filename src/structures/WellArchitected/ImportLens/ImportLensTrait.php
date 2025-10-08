<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ImportLens;

trait ImportLensTrait
{
    /**
     * @param ImportLensRequest $args
     * @return ImportLensResponse
     */
    public function importLens(ImportLensRequest $args)
    {
        $result = parent::importLens($args->toArray());
        return new ImportLensResponse($result->toArray());
    }
}
