<?php

namespace Sunaoka\Aws\Structures\Deadline\AssumeFleetRoleForRead;

trait AssumeFleetRoleForReadTrait
{
    /**
     * @param AssumeFleetRoleForReadRequest $args
     * @return AssumeFleetRoleForReadResponse
     */
    public function assumeFleetRoleForRead(AssumeFleetRoleForReadRequest $args)
    {
        $result = parent::assumeFleetRoleForRead($args->toArray());
        return new AssumeFleetRoleForReadResponse($result->toArray());
    }
}
