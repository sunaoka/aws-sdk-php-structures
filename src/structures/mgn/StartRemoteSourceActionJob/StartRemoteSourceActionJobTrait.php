<?php

namespace Sunaoka\Aws\Structures\mgn\StartRemoteSourceActionJob;

trait StartRemoteSourceActionJobTrait
{
    /**
     * @param StartRemoteSourceActionJobRequest $args
     * @return StartRemoteSourceActionJobResponse
     */
    public function startRemoteSourceActionJob(StartRemoteSourceActionJobRequest $args)
    {
        $result = parent::startRemoteSourceActionJob($args->toArray());
        return new StartRemoteSourceActionJobResponse($result->toArray());
    }
}
