<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyCacheSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheSubnetGroupName
 * @property string $CacheSubnetGroupDescription
 * @property list<string> $SubnetIds
 */
class ModifyCacheSubnetGroupRequest extends Request
{
    /**
     * @param array{
     *     CacheSubnetGroupName: string,
     *     CacheSubnetGroupDescription?: string,
     *     SubnetIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
