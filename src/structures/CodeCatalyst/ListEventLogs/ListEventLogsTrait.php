<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListEventLogs;

trait ListEventLogsTrait
{
    /**
     * @param ListEventLogsRequest $args
     * @return ListEventLogsResponse
     */
    public function listEventLogs(ListEventLogsRequest $args)
    {
        $result = parent::listEventLogs($args->toArray());
        return new ListEventLogsResponse($result->toArray());
    }
}
