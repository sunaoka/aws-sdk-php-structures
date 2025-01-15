<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateCacheSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheSecurityGroupName
 * @property string $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateCacheSecurityGroupRequest extends Request
{
    /**
     * @param array{
     *     CacheSecurityGroupName: string,
     *     Description: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
