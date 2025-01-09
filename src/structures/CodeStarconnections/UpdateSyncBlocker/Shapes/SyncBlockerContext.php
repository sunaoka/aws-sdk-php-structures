<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\UpdateSyncBlocker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 */
class SyncBlockerContext extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
