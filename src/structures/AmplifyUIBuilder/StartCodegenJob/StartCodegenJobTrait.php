<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\StartCodegenJob;

trait StartCodegenJobTrait
{
    /**
     * @param StartCodegenJobRequest $args
     * @return StartCodegenJobResponse
     */
    public function startCodegenJob(StartCodegenJobRequest $args)
    {
        $result = parent::startCodegenJob($args->toArray());
        return new StartCodegenJobResponse($result->toArray());
    }
}
