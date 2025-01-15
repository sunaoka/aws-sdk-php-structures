<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateCacheSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheSubnetGroupName
 * @property string $CacheSubnetGroupDescription
 * @property list<string> $SubnetIds
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateCacheSubnetGroupRequest extends Request
{
    /**
     * @param array{
     *     CacheSubnetGroupName: string,
     *     CacheSubnetGroupDescription: string,
     *     SubnetIds: list<string>,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
