<?php

namespace Sunaoka\Aws\Structures\Appstream\ListExportImageTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property int<0, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListExportImageTasksRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<0, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
