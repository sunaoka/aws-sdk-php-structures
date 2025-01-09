<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\RestoreTableFromRecoveryPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $activateCaseSensitiveIdentifier
 * @property string $namespaceName
 * @property string $newTableName
 * @property string $recoveryPointId
 * @property string $sourceDatabaseName
 * @property string $sourceSchemaName
 * @property string $sourceTableName
 * @property string $targetDatabaseName
 * @property string $targetSchemaName
 * @property string $workgroupName
 */
class RestoreTableFromRecoveryPointRequest extends Request
{
    /**
     * @param array{
     *     activateCaseSensitiveIdentifier?: bool,
     *     namespaceName: string,
     *     newTableName: string,
     *     recoveryPointId: string,
     *     sourceDatabaseName: string,
     *     sourceSchemaName?: string,
     *     sourceTableName: string,
     *     targetDatabaseName?: string,
     *     targetSchemaName?: string,
     *     workgroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
