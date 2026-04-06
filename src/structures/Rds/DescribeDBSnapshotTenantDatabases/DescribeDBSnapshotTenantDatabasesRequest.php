<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBSnapshotTenantDatabases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DBInstanceIdentifier
 * @property string|null $DBSnapshotIdentifier
 * @property string|null $SnapshotType
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property string|null $DbiResourceId
 */
class DescribeDBSnapshotTenantDatabasesRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier?: string|null,
     *     DBSnapshotIdentifier?: string|null,
     *     SnapshotType?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     DbiResourceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
