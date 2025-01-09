<?php

namespace Sunaoka\Aws\Structures\MemoryDB\BatchUpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ClusterNames
 * @property Shapes\ServiceUpdateRequest $ServiceUpdate
 */
class BatchUpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterNames: list<string>,
     *     ServiceUpdate?: Shapes\ServiceUpdateRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
