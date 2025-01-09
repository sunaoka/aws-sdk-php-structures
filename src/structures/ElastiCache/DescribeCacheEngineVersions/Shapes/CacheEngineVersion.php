<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $CacheParameterGroupFamily
 * @property string $CacheEngineDescription
 * @property string $CacheEngineVersionDescription
 */
class CacheEngineVersion extends Shape
{
    /**
     * @param array{
     *     Engine?: string,
     *     EngineVersion?: string,
     *     CacheParameterGroupFamily?: string,
     *     CacheEngineDescription?: string,
     *     CacheEngineVersionDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
