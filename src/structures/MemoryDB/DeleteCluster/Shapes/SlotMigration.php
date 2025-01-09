<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $ProgressPercentage
 */
class SlotMigration extends Shape
{
    /**
     * @param array{ProgressPercentage?: double} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
