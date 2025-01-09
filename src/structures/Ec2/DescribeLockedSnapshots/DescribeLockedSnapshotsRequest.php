<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLockedSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property int<5, 1000> $MaxResults
 * @property string $NextToken
 * @property list<string> $SnapshotIds
 * @property bool $DryRun
 */
class DescribeLockedSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
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
