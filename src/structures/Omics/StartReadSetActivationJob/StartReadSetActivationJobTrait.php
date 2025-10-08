<?php

namespace Sunaoka\Aws\Structures\Omics\StartReadSetActivationJob;

trait StartReadSetActivationJobTrait
{
    /**
     * @param StartReadSetActivationJobRequest $args
     * @return StartReadSetActivationJobResponse
     */
    public function startReadSetActivationJob(StartReadSetActivationJobRequest $args)
    {
        $result = parent::startReadSetActivationJob($args->toArray());
        return new StartReadSetActivationJobResponse($result->toArray());
    }
}
