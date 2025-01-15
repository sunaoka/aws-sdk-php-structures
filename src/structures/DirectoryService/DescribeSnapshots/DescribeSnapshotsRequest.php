<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DirectoryId
 * @property list<string>|null $SnapshotIds
 * @property string|null $NextToken
 * @property int<0, max>|null $Limit
 */
class DescribeSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     SnapshotIds?: list<string>|null,
     *     NextToken?: string|null,
     *     Limit?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
