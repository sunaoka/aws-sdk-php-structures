<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property string $RunId
 * @property bool|null $PredecessorsIncluded
 */
class GetJobRunRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     RunId: string,
     *     PredecessorsIncluded?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
