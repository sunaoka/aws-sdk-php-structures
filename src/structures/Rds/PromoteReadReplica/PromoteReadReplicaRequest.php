<?php

namespace Sunaoka\Aws\Structures\Rds\PromoteReadReplica;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property int|null $BackupRetentionPeriod
 * @property string|null $PreferredBackupWindow
 */
class PromoteReadReplicaRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     BackupRetentionPeriod?: int|null,
     *     PreferredBackupWindow?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
