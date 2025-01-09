<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MemoryStoreRetentionPeriodInHours
 * @property int $MagneticStoreRetentionPeriodInDays
 */
class RetentionProperties extends Shape
{
    /**
     * @param array{
     *     MemoryStoreRetentionPeriodInHours: int,
     *     MagneticStoreRetentionPeriodInDays: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
