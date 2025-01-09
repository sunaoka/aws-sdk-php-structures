<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteCacheSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheSubnetGroupName
 */
class DeleteCacheSubnetGroupRequest extends Request
{
    /**
     * @param array{CacheSubnetGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
