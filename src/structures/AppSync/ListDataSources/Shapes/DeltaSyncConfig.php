<?php

namespace Sunaoka\Aws\Structures\AppSync\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $baseTableTTL
 * @property string $deltaSyncTableName
 * @property int $deltaSyncTableTTL
 */
class DeltaSyncConfig extends Shape
{
    /**
     * @param array{
     *     baseTableTTL?: int,
     *     deltaSyncTableName?: string,
     *     deltaSyncTableTTL?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
