<?php

namespace Sunaoka\Aws\Structures\Omics\CancelVariantImportJob;

trait CancelVariantImportJobTrait
{
    /**
     * @param CancelVariantImportJobRequest $args
     * @return CancelVariantImportJobResponse
     */
    public function cancelVariantImportJob(CancelVariantImportJobRequest $args)
    {
        $result = parent::cancelVariantImportJob($args->toArray());
        return new CancelVariantImportJobResponse($result->toArray());
    }
}
