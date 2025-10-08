<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetChangeLogs;

trait GetChangeLogsTrait
{
    /**
     * @param GetChangeLogsRequest $args
     * @return GetChangeLogsResponse
     */
    public function getChangeLogs(GetChangeLogsRequest $args)
    {
        $result = parent::getChangeLogs($args->toArray());
        return new GetChangeLogsResponse($result->toArray());
    }
}
