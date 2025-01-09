<?php

namespace Sunaoka\Aws\Structures\MemoryDB\ListAllowedNodeTypeUpdates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 */
class ListAllowedNodeTypeUpdatesRequest extends Request
{
    /**
     * @param array{ClusterName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
