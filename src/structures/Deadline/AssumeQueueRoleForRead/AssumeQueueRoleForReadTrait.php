<?php

namespace Sunaoka\Aws\Structures\Deadline\AssumeQueueRoleForRead;

trait AssumeQueueRoleForReadTrait
{
    /**
     * @param AssumeQueueRoleForReadRequest $args
     * @return AssumeQueueRoleForReadResponse
     */
    public function assumeQueueRoleForRead(AssumeQueueRoleForReadRequest $args)
    {
        $result = parent::assumeQueueRoleForRead($args->toArray());
        return new AssumeQueueRoleForReadResponse($result->toArray());
    }
}
