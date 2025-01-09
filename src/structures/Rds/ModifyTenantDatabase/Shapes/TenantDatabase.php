<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyTenantDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $TenantDatabaseCreateTime
 * @property string $DBInstanceIdentifier
 * @property string $TenantDBName
 * @property string $Status
 * @property string $MasterUsername
 * @property string $DbiResourceId
 * @property string $TenantDatabaseResourceId
 * @property string $TenantDatabaseARN
 * @property string $CharacterSetName
 * @property string $NcharCharacterSetName
 * @property bool $DeletionProtection
 * @property TenantDatabasePendingModifiedValues $PendingModifiedValues
 * @property list<Tag> $TagList
 */
class TenantDatabase extends Shape
{
    /**
     * @param array{
     *     TenantDatabaseCreateTime?: \Aws\Api\DateTimeResult,
     *     DBInstanceIdentifier?: string,
     *     TenantDBName?: string,
     *     Status?: string,
     *     MasterUsername?: string,
     *     DbiResourceId?: string,
     *     TenantDatabaseResourceId?: string,
     *     TenantDatabaseARN?: string,
     *     CharacterSetName?: string,
     *     NcharCharacterSetName?: string,
     *     DeletionProtection?: bool,
     *     PendingModifiedValues?: TenantDatabasePendingModifiedValues,
     *     TagList?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
