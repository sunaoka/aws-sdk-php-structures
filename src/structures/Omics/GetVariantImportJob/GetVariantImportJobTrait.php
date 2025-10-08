<?php

namespace Sunaoka\Aws\Structures\Omics\GetVariantImportJob;

trait GetVariantImportJobTrait
{
    /**
     * @param GetVariantImportJobRequest $args
     * @return GetVariantImportJobResponse
     */
    public function getVariantImportJob(GetVariantImportJobRequest $args)
    {
        $result = parent::getVariantImportJob($args->toArray());
        return new GetVariantImportJobResponse($result->toArray());
    }
}
