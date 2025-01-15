<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheParameterGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CacheParameterGroupName
 * @property string|null $CacheParameterGroupFamily
 * @property string|null $Description
 * @property bool|null $IsGlobal
 * @property string|null $ARN
 */
class CacheParameterGroup extends Shape
{
    /**
     * @param array{
     *     CacheParameterGroupName?: string|null,
     *     CacheParameterGroupFamily?: string|null,
     *     Description?: string|null,
     *     IsGlobal?: bool|null,
     *     ARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
