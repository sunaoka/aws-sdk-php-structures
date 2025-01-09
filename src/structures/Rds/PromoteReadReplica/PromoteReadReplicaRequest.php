<?php

namespace Sunaoka\Aws\Structures\Rds\PromoteReadReplica;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property int $BackupRetentionPeriod
 * @property string $PreferredBackupWindow
 */
class PromoteReadReplicaRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     BackupRetentionPeriod?: int,
     *     PreferredBackupWindow?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
