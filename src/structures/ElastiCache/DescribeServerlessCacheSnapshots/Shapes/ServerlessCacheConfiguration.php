<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeServerlessCacheSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServerlessCacheName
 * @property string|null $Engine
 * @property string|null $MajorEngineVersion
 */
class ServerlessCacheConfiguration extends Shape
{
    /**
     * @param array{
     *     ServerlessCacheName?: string|null,
     *     Engine?: string|null,
     *     MajorEngineVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
