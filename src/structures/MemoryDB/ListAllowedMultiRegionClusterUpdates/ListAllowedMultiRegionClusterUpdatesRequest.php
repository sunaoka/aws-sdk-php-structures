<?php

namespace Sunaoka\Aws\Structures\MemoryDB\ListAllowedMultiRegionClusterUpdates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiRegionClusterName
 */
class ListAllowedMultiRegionClusterUpdatesRequest extends Request
{
    /**
     * @param array{MultiRegionClusterName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
