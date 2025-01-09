<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateCacheSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheSubnetGroupName
 * @property string $CacheSubnetGroupDescription
 * @property list<string> $SubnetIds
 * @property list<Shapes\Tag> $Tags
 */
class CreateCacheSubnetGroupRequest extends Request
{
    /**
     * @param array{
     *     CacheSubnetGroupName: string,
     *     CacheSubnetGroupDescription: string,
     *     SubnetIds: list<string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
