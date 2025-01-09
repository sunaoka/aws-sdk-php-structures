<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketInventoryConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Daily'|'Weekly' $Frequency
 */
class InventorySchedule extends Shape
{
    /**
     * @param array{Frequency: 'Daily'|'Weekly'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
