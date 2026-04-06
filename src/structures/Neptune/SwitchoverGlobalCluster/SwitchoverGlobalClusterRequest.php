<?php

namespace Sunaoka\Aws\Structures\Neptune\SwitchoverGlobalCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalClusterIdentifier
 * @property string $TargetDbClusterIdentifier
 */
class SwitchoverGlobalClusterRequest extends Request
{
    /**
     * @param array{
     *     GlobalClusterIdentifier: string,
     *     TargetDbClusterIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
