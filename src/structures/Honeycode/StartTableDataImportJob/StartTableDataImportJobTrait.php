<?php

namespace Sunaoka\Aws\Structures\Honeycode\StartTableDataImportJob;

trait StartTableDataImportJobTrait
{
    /**
     * @param StartTableDataImportJobRequest $args
     * @return StartTableDataImportJobResponse
     */
    public function startTableDataImportJob(StartTableDataImportJobRequest $args)
    {
        $result = parent::startTableDataImportJob($args->toArray());
        return new StartTableDataImportJobResponse($result->toArray());
    }
}
