<?php

namespace Sunaoka\Aws\Structures\Amplify\GenerateAccessLogs;

trait GenerateAccessLogsTrait
{
    /**
     * @param GenerateAccessLogsRequest $args
     * @return GenerateAccessLogsResponse
     */
    public function generateAccessLogs(GenerateAccessLogsRequest $args)
    {
        $result = parent::generateAccessLogs($args->toArray());
        return new GenerateAccessLogsResponse($result->toArray());
    }
}
