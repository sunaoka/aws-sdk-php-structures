<?php

namespace Sunaoka\Aws\Structures\Rds\SwitchoverReadReplica;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 */
class SwitchoverReadReplicaRequest extends Request
{
    /**
     * @param array{DBInstanceIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
