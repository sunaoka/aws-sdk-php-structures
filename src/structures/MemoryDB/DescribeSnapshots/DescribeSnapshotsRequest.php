<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string $SnapshotName
 * @property string $Source
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $ShowDetail
 */
class DescribeSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     ClusterName?: string,
     *     SnapshotName?: string,
     *     Source?: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     ShowDetail?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
