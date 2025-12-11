<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableStorageClass;

trait GetTableStorageClassTrait
{
    /**
     * @param GetTableStorageClassRequest $args
     * @return GetTableStorageClassResponse
     */
    public function getTableStorageClass(GetTableStorageClassRequest $args)
    {
        $result = parent::getTableStorageClass($args->toArray());
        return new GetTableStorageClassResponse($result->toArray());
    }
}
