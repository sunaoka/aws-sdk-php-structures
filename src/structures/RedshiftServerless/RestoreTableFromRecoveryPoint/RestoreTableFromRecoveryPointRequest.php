<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\RestoreTableFromRecoveryPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $activateCaseSensitiveIdentifier
 * @property string $namespaceName
 * @property string $newTableName
 * @property string $recoveryPointId
 * @property string $sourceDatabaseName
 * @property string|null $sourceSchemaName
 * @property string $sourceTableName
 * @property string|null $targetDatabaseName
 * @property string|null $targetSchemaName
 * @property string $workgroupName
 */
class RestoreTableFromRecoveryPointRequest extends Request
{
    /**
     * @param array{
     *     activateCaseSensitiveIdentifier?: bool|null,
     *     namespaceName: string,
     *     newTableName: string,
     *     recoveryPointId: string,
     *     sourceDatabaseName: string,
     *     sourceSchemaName?: string|null,
     *     sourceTableName: string,
     *     targetDatabaseName?: string|null,
     *     targetSchemaName?: string|null,
     *     workgroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
