<?php

namespace Sunaoka\Aws\Structures\DocDB\FailoverDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DBClusterIdentifier
 * @property string|null $TargetDBInstanceIdentifier
 */
class FailoverDBClusterRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier?: string|null,
     *     TargetDBInstanceIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
