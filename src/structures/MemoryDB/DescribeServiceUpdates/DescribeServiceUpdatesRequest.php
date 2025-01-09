<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeServiceUpdates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceUpdateName
 * @property list<string> $ClusterNames
 * @property list<'available'|'in-progress'|'complete'|'scheduled'> $Status
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeServiceUpdatesRequest extends Request
{
    /**
     * @param array{
     *     ServiceUpdateName?: string,
     *     ClusterNames?: list<string>,
     *     Status?: list<'available'|'in-progress'|'complete'|'scheduled'>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
