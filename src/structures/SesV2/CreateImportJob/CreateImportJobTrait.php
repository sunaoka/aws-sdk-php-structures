<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateImportJob;

trait CreateImportJobTrait
{
    /**
     * @param CreateImportJobRequest $args
     * @return CreateImportJobResponse
     */
    public function createImportJob(CreateImportJobRequest $args)
    {
        $result = parent::createImportJob($args->toArray());
        return new CreateImportJobResponse($result->toArray());
    }
}
