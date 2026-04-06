<?php

namespace Sunaoka\Aws\Structures\QConnect\StartImportJob;

trait StartImportJobTrait
{
    /**
     * @param StartImportJobRequest $args
     * @return StartImportJobResponse
     */
    public function startImportJob(StartImportJobRequest $args)
    {
        $result = parent::startImportJob($args->toArray());
        return new StartImportJobResponse($result->toArray());
    }
}
