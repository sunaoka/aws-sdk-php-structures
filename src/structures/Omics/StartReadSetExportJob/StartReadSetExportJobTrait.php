<?php

namespace Sunaoka\Aws\Structures\Omics\StartReadSetExportJob;

trait StartReadSetExportJobTrait
{
    /**
     * @param StartReadSetExportJobRequest $args
     * @return StartReadSetExportJobResponse
     */
    public function startReadSetExportJob(StartReadSetExportJobRequest $args)
    {
        $result = parent::startReadSetExportJob($args->toArray());
        return new StartReadSetExportJobResponse($result->toArray());
    }
}
