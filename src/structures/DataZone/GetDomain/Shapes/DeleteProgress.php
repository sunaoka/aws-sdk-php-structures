<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $successfullyDeletedProjectCount
 */
class DeleteProgress extends Shape
{
    /**
     * @param array{successfullyDeletedProjectCount?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
