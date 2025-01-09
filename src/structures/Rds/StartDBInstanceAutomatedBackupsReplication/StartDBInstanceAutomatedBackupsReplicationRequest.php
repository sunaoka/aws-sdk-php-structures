<?php

namespace Sunaoka\Aws\Structures\Rds\StartDBInstanceAutomatedBackupsReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceDBInstanceArn
 * @property int $BackupRetentionPeriod
 * @property string $KmsKeyId
 * @property string $PreSignedUrl
 */
class StartDBInstanceAutomatedBackupsReplicationRequest extends Request
{
    /**
     * @param array{
     *     SourceDBInstanceArn: string,
     *     BackupRetentionPeriod?: int,
     *     KmsKeyId?: string,
     *     PreSignedUrl?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
