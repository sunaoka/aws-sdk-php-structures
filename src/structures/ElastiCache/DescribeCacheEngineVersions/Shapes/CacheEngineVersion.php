<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $CacheParameterGroupFamily
 * @property string|null $CacheEngineDescription
 * @property string|null $CacheEngineVersionDescription
 */
class CacheEngineVersion extends Shape
{
    /**
     * @param array{
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     CacheParameterGroupFamily?: string|null,
     *     CacheEngineDescription?: string|null,
     *     CacheEngineVersionDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
