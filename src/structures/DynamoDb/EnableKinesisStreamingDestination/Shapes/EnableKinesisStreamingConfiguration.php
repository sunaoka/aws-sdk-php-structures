<?php

namespace Sunaoka\Aws\Structures\DynamoDb\EnableKinesisStreamingDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MILLISECOND'|'MICROSECOND' $ApproximateCreationDateTimePrecision
 */
class EnableKinesisStreamingConfiguration extends Shape
{
    /**
     * @param array{ApproximateCreationDateTimePrecision?: 'MILLISECOND'|'MICROSECOND'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
