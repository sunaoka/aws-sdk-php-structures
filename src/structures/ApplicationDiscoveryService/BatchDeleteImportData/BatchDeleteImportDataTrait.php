<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\BatchDeleteImportData;

trait BatchDeleteImportDataTrait
{
    /**
     * @param BatchDeleteImportDataRequest $args
     * @return BatchDeleteImportDataResponse
     */
    public function batchDeleteImportData(BatchDeleteImportDataRequest $args)
    {
        $result = parent::batchDeleteImportData($args->toArray());
        return new BatchDeleteImportDataResponse($result->toArray());
    }
}
