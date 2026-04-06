<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogObject;

trait GetLogObjectTrait
{
    /**
     * @param GetLogObjectRequest $args
     * @return GetLogObjectResponse
     */
    public function getLogObject(GetLogObjectRequest $args)
    {
        $result = parent::getLogObject($args->toArray());
        return new GetLogObjectResponse($result->toArray());
    }
}
