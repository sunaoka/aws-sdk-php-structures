<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $SnapshotIds
 * @property list<Shapes\SnapshotFilter>|null $Filters
 * @property int<1, 2147483647>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $IncludeShared
 */
class DescribeSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     SnapshotIds?: list<string>|null,
     *     Filters?: list<Shapes\SnapshotFilter>|null,
     *     MaxResults?: int<1, 2147483647>|null,
     *     NextToken?: string|null,
     *     IncludeShared?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
