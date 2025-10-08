<?php

namespace Sunaoka\Aws\Structures\mgn\ResumeReplication;

trait ResumeReplicationTrait
{
    /**
     * @param ResumeReplicationRequest $args
     * @return ResumeReplicationResponse
     */
    public function resumeReplication(ResumeReplicationRequest $args)
    {
        $result = parent::resumeReplication($args->toArray());
        return new ResumeReplicationResponse($result->toArray());
    }
}
