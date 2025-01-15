<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeEdgeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<64, 2000000>|null $MaxLocalMediaSizeInMB
 * @property 'DELETE_OLDEST_MEDIA'|'DENY_NEW_MEDIA'|null $StrategyOnFullSize
 */
class LocalSizeConfig extends Shape
{
    /**
     * @param array{
     *     MaxLocalMediaSizeInMB?: int<64, 2000000>|null,
     *     StrategyOnFullSize?: 'DELETE_OLDEST_MEDIA'|'DENY_NEW_MEDIA'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
