<?php

namespace Sunaoka\Aws\Structures\Rds\PromoteReadReplica;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property int|null $BackupRetentionPeriod
 * @property string|null $PreferredBackupWindow
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class PromoteReadReplicaRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     BackupRetentionPeriod?: int|null,
     *     PreferredBackupWindow?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
