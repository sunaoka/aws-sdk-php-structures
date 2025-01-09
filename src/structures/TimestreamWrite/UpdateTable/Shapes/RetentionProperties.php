<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 8766> $MemoryStoreRetentionPeriodInHours
 * @property int<1, 73000> $MagneticStoreRetentionPeriodInDays
 */
class RetentionProperties extends Shape
{
    /**
     * @param array{
     *     MemoryStoreRetentionPeriodInHours: int<1, 8766>,
     *     MagneticStoreRetentionPeriodInDays: int<1, 73000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
