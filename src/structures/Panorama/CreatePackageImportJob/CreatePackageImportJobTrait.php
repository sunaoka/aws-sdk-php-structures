<?php

namespace Sunaoka\Aws\Structures\Panorama\CreatePackageImportJob;

trait CreatePackageImportJobTrait
{
    /**
     * @param CreatePackageImportJobRequest $args
     * @return CreatePackageImportJobResponse
     */
    public function createPackageImportJob(CreatePackageImportJobRequest $args)
    {
        $result = parent::createPackageImportJob($args->toArray());
        return new CreatePackageImportJobResponse($result->toArray());
    }
}
