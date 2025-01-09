<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBSnapshotTenantDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBSnapshotIdentifier
 * @property string $DBInstanceIdentifier
 * @property string $DbiResourceId
 * @property string $EngineName
 * @property string $SnapshotType
 * @property \Aws\Api\DateTimeResult $TenantDatabaseCreateTime
 * @property string $TenantDBName
 * @property string $MasterUsername
 * @property string $TenantDatabaseResourceId
 * @property string $CharacterSetName
 * @property string $DBSnapshotTenantDatabaseARN
 * @property string $NcharCharacterSetName
 * @property list<Tag> $TagList
 */
class DBSnapshotTenantDatabase extends Shape
{
    /**
     * @param array{
     *     DBSnapshotIdentifier?: string,
     *     DBInstanceIdentifier?: string,
     *     DbiResourceId?: string,
     *     EngineName?: string,
     *     SnapshotType?: string,
     *     TenantDatabaseCreateTime?: \Aws\Api\DateTimeResult,
     *     TenantDBName?: string,
     *     MasterUsername?: string,
     *     TenantDatabaseResourceId?: string,
     *     CharacterSetName?: string,
     *     DBSnapshotTenantDatabaseARN?: string,
     *     NcharCharacterSetName?: string,
     *     TagList?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
