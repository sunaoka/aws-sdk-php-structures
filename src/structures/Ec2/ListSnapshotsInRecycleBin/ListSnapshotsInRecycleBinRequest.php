<?php

namespace Sunaoka\Aws\Structures\Ec2\ListSnapshotsInRecycleBin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<5, 1000> $MaxResults
 * @property string $NextToken
 * @property list<string> $SnapshotIds
 * @property bool $DryRun
 */
class ListSnapshotsInRecycleBinRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<5, 1000>,
     *     NextToken?: string,
     *     SnapshotIds?: list<string>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
