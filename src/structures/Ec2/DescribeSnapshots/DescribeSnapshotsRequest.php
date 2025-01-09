<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<string> $OwnerIds
 * @property list<string> $RestorableByUserIds
 * @property list<string> $SnapshotIds
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 */
class DescribeSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     OwnerIds?: list<string>,
     *     RestorableByUserIds?: list<string>,
     *     SnapshotIds?: list<string>,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
