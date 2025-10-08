<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ExportLens;

trait ExportLensTrait
{
    /**
     * @param ExportLensRequest $args
     * @return ExportLensResponse
     */
    public function exportLens(ExportLensRequest $args)
    {
        $result = parent::exportLens($args->toArray());
        return new ExportLensResponse($result->toArray());
    }
}
