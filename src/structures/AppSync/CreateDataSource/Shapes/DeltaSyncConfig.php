<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $baseTableTTL
 * @property string|null $deltaSyncTableName
 * @property int|null $deltaSyncTableTTL
 */
class DeltaSyncConfig extends Shape
{
    /**
     * @param array{
     *     baseTableTTL?: int|null,
     *     deltaSyncTableName?: string|null,
     *     deltaSyncTableTTL?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
