<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeDataIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalNumberOfUnsupportedTimestamps
 */
class UnsupportedTimestamps extends Shape
{
    /**
     * @param array{TotalNumberOfUnsupportedTimestamps: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
