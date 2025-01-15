<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterName
 * @property string|null $SnapshotName
 * @property string|null $Source
 * @property string|null $NextToken
 * @property int|null $MaxResults
 * @property bool|null $ShowDetail
 */
class DescribeSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     ClusterName?: string|null,
     *     SnapshotName?: string|null,
     *     Source?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int|null,
     *     ShowDetail?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
