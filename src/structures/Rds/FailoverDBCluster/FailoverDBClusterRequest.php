<?php

namespace Sunaoka\Aws\Structures\Rds\FailoverDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string|null $TargetDBInstanceIdentifier
 */
class FailoverDBClusterRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     TargetDBInstanceIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
