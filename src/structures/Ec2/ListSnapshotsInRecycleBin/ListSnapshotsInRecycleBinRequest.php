<?php

namespace Sunaoka\Aws\Structures\Ec2\ListSnapshotsInRecycleBin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property list<string>|null $SnapshotIds
 * @property bool|null $DryRun
 */
class ListSnapshotsInRecycleBinRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null,
     *     SnapshotIds?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
