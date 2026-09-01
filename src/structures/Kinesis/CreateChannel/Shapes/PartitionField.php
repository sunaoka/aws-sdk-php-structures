<?php

namespace Sunaoka\Aws\Structures\Kinesis\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TIME_HOUR' $Transform
 * @property string $SourceName
 */
class PartitionField extends Shape
{
    /**
     * @param array{
     *     Transform: 'TIME_HOUR',
     *     SourceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
