<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PartitionKey
 */
class PipeTargetKinesisStreamParameters extends Shape
{
    /**
     * @param array{PartitionKey: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
