<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteCacheParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheParameterGroupName
 */
class DeleteCacheParameterGroupRequest extends Request
{
    /**
     * @param array{CacheParameterGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
