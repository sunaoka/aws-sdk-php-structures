<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $SnapshotIds
 * @property list<Shapes\SnapshotFilter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $IncludeShared
 */
class DescribeSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     SnapshotIds?: list<string>,
     *     Filters?: list<Shapes\SnapshotFilter>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     IncludeShared?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
