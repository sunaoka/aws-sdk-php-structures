<?php

namespace Sunaoka\Aws\Structures\Omics\StartReadSetImportJob;

trait StartReadSetImportJobTrait
{
    /**
     * @param StartReadSetImportJobRequest $args
     * @return StartReadSetImportJobResponse
     */
    public function startReadSetImportJob(StartReadSetImportJobRequest $args)
    {
        $result = parent::startReadSetImportJob($args->toArray());
        return new StartReadSetImportJobResponse($result->toArray());
    }
}
