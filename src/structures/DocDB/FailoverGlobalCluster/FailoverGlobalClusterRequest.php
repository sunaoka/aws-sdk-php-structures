<?php

namespace Sunaoka\Aws\Structures\DocDB\FailoverGlobalCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalClusterIdentifier
 * @property string $TargetDbClusterIdentifier
 * @property bool $AllowDataLoss
 * @property bool $Switchover
 */
class FailoverGlobalClusterRequest extends Request
{
    /**
     * @param array{
     *     GlobalClusterIdentifier: string,
     *     TargetDbClusterIdentifier: string,
     *     AllowDataLoss?: bool,
     *     Switchover?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
