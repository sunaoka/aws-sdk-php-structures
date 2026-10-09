<?php

namespace Sunaoka\Aws\Structures\Glue\GetSystemLogsForJobRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property string $RunId
 */
class GetSystemLogsForJobRunRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     RunId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
