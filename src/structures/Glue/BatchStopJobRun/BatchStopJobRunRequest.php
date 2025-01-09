<?php

namespace Sunaoka\Aws\Structures\Glue\BatchStopJobRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property list<string> $JobRunIds
 */
class BatchStopJobRunRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     JobRunIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
