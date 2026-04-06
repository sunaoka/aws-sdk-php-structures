<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAutomationJob;

trait StartAutomationJobTrait
{
    /**
     * @param StartAutomationJobRequest $args
     * @return StartAutomationJobResponse
     */
    public function startAutomationJob(StartAutomationJobRequest $args)
    {
        $result = parent::startAutomationJob($args->toArray());
        return new StartAutomationJobResponse($result->toArray());
    }
}
