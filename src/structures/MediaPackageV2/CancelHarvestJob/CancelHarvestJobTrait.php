<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CancelHarvestJob;

trait CancelHarvestJobTrait
{
    /**
     * @param CancelHarvestJobRequest $args
     * @return CancelHarvestJobResponse
     */
    public function cancelHarvestJob(CancelHarvestJobRequest $args)
    {
        $result = parent::cancelHarvestJob($args->toArray());
        return new CancelHarvestJobResponse($result->toArray());
    }
}
