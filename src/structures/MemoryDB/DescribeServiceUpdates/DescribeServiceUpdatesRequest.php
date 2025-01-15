<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeServiceUpdates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ServiceUpdateName
 * @property list<string>|null $ClusterNames
 * @property list<'available'|'in-progress'|'complete'|'scheduled'>|null $Status
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeServiceUpdatesRequest extends Request
{
    /**
     * @param array{
     *     ServiceUpdateName?: string|null,
     *     ClusterNames?: list<string>|null,
     *     Status?: list<'available'|'in-progress'|'complete'|'scheduled'>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
