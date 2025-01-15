<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyCacheSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheSubnetGroupName
 * @property string|null $CacheSubnetGroupDescription
 * @property list<string>|null $SubnetIds
 */
class ModifyCacheSubnetGroupRequest extends Request
{
    /**
     * @param array{
     *     CacheSubnetGroupName: string,
     *     CacheSubnetGroupDescription?: string|null,
     *     SubnetIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
