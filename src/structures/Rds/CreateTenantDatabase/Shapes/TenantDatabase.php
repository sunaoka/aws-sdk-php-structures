<?php

namespace Sunaoka\Aws\Structures\Rds\CreateTenantDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $TenantDatabaseCreateTime
 * @property string|null $DBInstanceIdentifier
 * @property string|null $TenantDBName
 * @property string|null $Status
 * @property string|null $MasterUsername
 * @property string|null $DbiResourceId
 * @property string|null $TenantDatabaseResourceId
 * @property string|null $TenantDatabaseARN
 * @property string|null $CharacterSetName
 * @property string|null $NcharCharacterSetName
 * @property bool|null $DeletionProtection
 * @property TenantDatabasePendingModifiedValues|null $PendingModifiedValues
 * @property list<Tag>|null $TagList
 */
class TenantDatabase extends Shape
{
    /**
     * @param array{
     *     TenantDatabaseCreateTime?: \Aws\Api\DateTimeResult|null,
     *     DBInstanceIdentifier?: string|null,
     *     TenantDBName?: string|null,
     *     Status?: string|null,
     *     MasterUsername?: string|null,
     *     DbiResourceId?: string|null,
     *     TenantDatabaseResourceId?: string|null,
     *     TenantDatabaseARN?: string|null,
     *     CharacterSetName?: string|null,
     *     NcharCharacterSetName?: string|null,
     *     DeletionProtection?: bool|null,
     *     PendingModifiedValues?: TenantDatabasePendingModifiedValues|null,
     *     TagList?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
