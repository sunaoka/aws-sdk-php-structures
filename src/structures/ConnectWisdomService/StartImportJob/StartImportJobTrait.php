<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\StartImportJob;

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
