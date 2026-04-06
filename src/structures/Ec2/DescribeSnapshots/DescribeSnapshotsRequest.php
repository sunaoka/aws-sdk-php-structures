<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property list<string>|null $OwnerIds
 * @property list<string>|null $RestorableByUserIds
 * @property list<string>|null $SnapshotIds
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     OwnerIds?: list<string>|null,
     *     RestorableByUserIds?: list<string>|null,
     *     SnapshotIds?: list<string>|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
