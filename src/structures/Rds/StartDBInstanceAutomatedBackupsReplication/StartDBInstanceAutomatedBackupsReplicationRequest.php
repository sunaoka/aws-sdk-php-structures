<?php

namespace Sunaoka\Aws\Structures\Rds\StartDBInstanceAutomatedBackupsReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceDBInstanceArn
 * @property int|null $BackupRetentionPeriod
 * @property string|null $KmsKeyId
 * @property string|null $PreSignedUrl
 */
class StartDBInstanceAutomatedBackupsReplicationRequest extends Request
{
    /**
     * @param array{
     *     SourceDBInstanceArn: string,
     *     BackupRetentionPeriod?: int|null,
     *     KmsKeyId?: string|null,
     *     PreSignedUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
