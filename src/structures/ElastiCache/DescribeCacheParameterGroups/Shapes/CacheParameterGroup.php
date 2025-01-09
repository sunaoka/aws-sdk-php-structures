<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheParameterGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CacheParameterGroupName
 * @property string $CacheParameterGroupFamily
 * @property string $Description
 * @property bool $IsGlobal
 * @property string $ARN
 */
class CacheParameterGroup extends Shape
{
    /**
     * @param array{
     *     CacheParameterGroupName?: string,
     *     CacheParameterGroupFamily?: string,
     *     Description?: string,
     *     IsGlobal?: bool,
     *     ARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
