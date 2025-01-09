<?php

namespace Sunaoka\Aws\Structures\Rds\StopDBInstanceAutomatedBackupsReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceDBInstanceArn
 */
class StopDBInstanceAutomatedBackupsReplicationRequest extends Request
{
    /**
     * @param array{SourceDBInstanceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
