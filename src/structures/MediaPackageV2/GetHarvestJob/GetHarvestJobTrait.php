<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetHarvestJob;

trait GetHarvestJobTrait
{
    /**
     * @param GetHarvestJobRequest $args
     * @return GetHarvestJobResponse
     */
    public function getHarvestJob(GetHarvestJobRequest $args)
    {
        $result = parent::getHarvestJob($args->toArray());
        return new GetHarvestJobResponse($result->toArray());
    }
}
