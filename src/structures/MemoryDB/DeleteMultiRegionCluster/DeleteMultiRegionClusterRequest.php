<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteMultiRegionCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiRegionClusterName
 */
class DeleteMultiRegionClusterRequest extends Request
{
    /**
     * @param array{MultiRegionClusterName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
