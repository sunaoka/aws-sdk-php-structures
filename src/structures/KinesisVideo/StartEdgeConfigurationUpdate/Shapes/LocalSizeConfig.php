<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\StartEdgeConfigurationUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxLocalMediaSizeInMB
 * @property 'DELETE_OLDEST_MEDIA'|'DENY_NEW_MEDIA' $StrategyOnFullSize
 */
class LocalSizeConfig extends Shape
{
    /**
     * @param array{
     *     MaxLocalMediaSizeInMB?: int,
     *     StrategyOnFullSize?: 'DELETE_OLDEST_MEDIA'|'DENY_NEW_MEDIA'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
