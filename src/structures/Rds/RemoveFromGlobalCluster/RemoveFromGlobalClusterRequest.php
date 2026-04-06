<?php

namespace Sunaoka\Aws\Structures\Rds\RemoveFromGlobalCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GlobalClusterIdentifier
 * @property string|null $DbClusterIdentifier
 */
class RemoveFromGlobalClusterRequest extends Request
{
    /**
     * @param array{
     *     GlobalClusterIdentifier?: string|null,
     *     DbClusterIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
