<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ImportModelVersion;

trait ImportModelVersionTrait
{
    /**
     * @param ImportModelVersionRequest $args
     * @return ImportModelVersionResponse
     */
    public function importModelVersion(ImportModelVersionRequest $args)
    {
        $result = parent::importModelVersion($args->toArray());
        return new ImportModelVersionResponse($result->toArray());
    }
}
