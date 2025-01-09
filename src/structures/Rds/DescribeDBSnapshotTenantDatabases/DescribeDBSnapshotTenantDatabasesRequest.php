<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBSnapshotTenantDatabases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string $DBSnapshotIdentifier
 * @property string $SnapshotType
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 * @property string $DbiResourceId
 */
class DescribeDBSnapshotTenantDatabasesRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier?: string,
     *     DBSnapshotIdentifier?: string,
     *     SnapshotType?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     DbiResourceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
