<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteCacheSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheSecurityGroupName
 */
class DeleteCacheSecurityGroupRequest extends Request
{
    /**
     * @param array{CacheSecurityGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
