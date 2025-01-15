<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusterSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DBClusterIdentifier
 * @property string|null $DBClusterSnapshotIdentifier
 * @property string|null $SnapshotType
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property bool|null $IncludeShared
 * @property bool|null $IncludePublic
 * @property string|null $DbClusterResourceId
 */
class DescribeDBClusterSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier?: string|null,
     *     DBClusterSnapshotIdentifier?: string|null,
     *     SnapshotType?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     IncludeShared?: bool|null,
     *     IncludePublic?: bool|null,
     *     DbClusterResourceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
