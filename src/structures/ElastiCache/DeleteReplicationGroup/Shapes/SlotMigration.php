<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteReplicationGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $ProgressPercentage
 */
class SlotMigration extends Shape
{
    /**
     * @param array{ProgressPercentage?: double|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
