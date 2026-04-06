<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBSnapshotTenantDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBSnapshotIdentifier
 * @property string|null $DBInstanceIdentifier
 * @property string|null $DbiResourceId
 * @property string|null $EngineName
 * @property string|null $SnapshotType
 * @property \Aws\Api\DateTimeResult|null $TenantDatabaseCreateTime
 * @property string|null $TenantDBName
 * @property string|null $MasterUsername
 * @property string|null $TenantDatabaseResourceId
 * @property string|null $CharacterSetName
 * @property string|null $DBSnapshotTenantDatabaseARN
 * @property string|null $NcharCharacterSetName
 * @property list<Tag>|null $TagList
 */
class DBSnapshotTenantDatabase extends Shape
{
    /**
     * @param array{
     *     DBSnapshotIdentifier?: string|null,
     *     DBInstanceIdentifier?: string|null,
     *     DbiResourceId?: string|null,
     *     EngineName?: string|null,
     *     SnapshotType?: string|null,
     *     TenantDatabaseCreateTime?: \Aws\Api\DateTimeResult|null,
     *     TenantDBName?: string|null,
     *     MasterUsername?: string|null,
     *     TenantDatabaseResourceId?: string|null,
     *     CharacterSetName?: string|null,
     *     DBSnapshotTenantDatabaseARN?: string|null,
     *     NcharCharacterSetName?: string|null,
     *     TagList?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
