<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeDBClusterSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string $DBClusterSnapshotIdentifier
 * @property string $SnapshotType
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 * @property bool $IncludeShared
 * @property bool $IncludePublic
 */
class DescribeDBClusterSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier?: string,
     *     DBClusterSnapshotIdentifier?: string,
     *     SnapshotType?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     IncludeShared?: bool,
     *     IncludePublic?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
