<?php

namespace Sunaoka\Aws\Structures\Omics\StartVariantImportJob;

trait StartVariantImportJobTrait
{
    /**
     * @param StartVariantImportJobRequest $args
     * @return StartVariantImportJobResponse
     */
    public function startVariantImportJob(StartVariantImportJobRequest $args)
    {
        $result = parent::startVariantImportJob($args->toArray());
        return new StartVariantImportJobResponse($result->toArray());
    }
}
