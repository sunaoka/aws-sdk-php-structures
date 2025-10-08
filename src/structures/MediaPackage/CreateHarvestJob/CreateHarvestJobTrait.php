<?php

namespace Sunaoka\Aws\Structures\MediaPackage\CreateHarvestJob;

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
