<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListExportTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $graphIdentifier
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListExportTasksRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
