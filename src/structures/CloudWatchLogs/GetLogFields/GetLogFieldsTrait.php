<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogFields;

trait GetLogFieldsTrait
{
    /**
     * @param GetLogFieldsRequest $args
     * @return GetLogFieldsResponse
     */
    public function getLogFields(GetLogFieldsRequest $args)
    {
        $result = parent::getLogFields($args->toArray());
        return new GetLogFieldsResponse($result->toArray());
    }
}
