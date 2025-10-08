<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogGroupFields;

trait GetLogGroupFieldsTrait
{
    /**
     * @param GetLogGroupFieldsRequest $args
     * @return GetLogGroupFieldsResponse
     */
    public function getLogGroupFields(GetLogGroupFieldsRequest $args)
    {
        $result = parent::getLogGroupFields($args->toArray());
        return new GetLogGroupFieldsResponse($result->toArray());
    }
}
