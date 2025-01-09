<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property list<string> $SnapshotIds
 * @property string $NextToken
 * @property int<0, max> $Limit
 */
class DescribeSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     SnapshotIds?: list<string>,
     *     NextToken?: string,
     *     Limit?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
