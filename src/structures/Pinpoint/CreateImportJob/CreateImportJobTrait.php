<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateImportJob;

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
