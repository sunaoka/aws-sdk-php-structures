<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateHarvestJob;

trait CreateHarvestJobTrait
{
    /**
     * @param CreateHarvestJobRequest $args
     * @return CreateHarvestJobResponse
     */
    public function createHarvestJob(CreateHarvestJobRequest $args)
    {
        $result = parent::createHarvestJob($args->toArray());
        return new CreateHarvestJobResponse($result->toArray());
    }
}
