<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteServerlessCacheSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerlessCacheName
 * @property string $Engine
 * @property string $MajorEngineVersion
 */
class ServerlessCacheConfiguration extends Shape
{
    /**
     * @param array{
     *     ServerlessCacheName?: string,
     *     Engine?: string,
     *     MajorEngineVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
