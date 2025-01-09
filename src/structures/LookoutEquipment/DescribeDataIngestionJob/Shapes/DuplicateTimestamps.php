<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeDataIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalNumberOfDuplicateTimestamps
 */
class DuplicateTimestamps extends Shape
{
    /**
     * @param array{TotalNumberOfDuplicateTimestamps: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
