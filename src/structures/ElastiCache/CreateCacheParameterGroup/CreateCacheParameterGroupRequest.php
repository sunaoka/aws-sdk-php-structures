<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateCacheParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheParameterGroupName
 * @property string $CacheParameterGroupFamily
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class CreateCacheParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     CacheParameterGroupName: string,
     *     CacheParameterGroupFamily: string,
     *     Description: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
