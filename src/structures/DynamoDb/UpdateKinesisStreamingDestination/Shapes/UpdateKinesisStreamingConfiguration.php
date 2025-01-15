<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateKinesisStreamingDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MILLISECOND'|'MICROSECOND'|null $ApproximateCreationDateTimePrecision
 */
class UpdateKinesisStreamingConfiguration extends Shape
{
    /**
     * @param array{ApproximateCreationDateTimePrecision?: 'MILLISECOND'|'MICROSECOND'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
