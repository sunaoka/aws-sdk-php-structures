<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ImportDataset;

trait ImportDatasetTrait
{
    /**
     * @param ImportDatasetRequest $args
     * @return ImportDatasetResponse
     */
    public function importDataset(ImportDatasetRequest $args)
    {
        $result = parent::importDataset($args->toArray());
        return new ImportDatasetResponse($result->toArray());
    }
}
