<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property list<string>|null $OwnerIds
 * @property list<string>|null $RestorableByUserIds
 * @property list<string>|null $SnapshotIds
 * @property bool|null $DryRun
 */
class DescribeSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     OwnerIds?: list<string>|null,
     *     RestorableByUserIds?: list<string>|null,
     *     SnapshotIds?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
