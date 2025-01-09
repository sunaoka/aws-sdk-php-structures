<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceName
 */
class PartitionField extends Shape
{
    /**
     * @param array{SourceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
