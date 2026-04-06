<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetEventDataStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Type
 */
class PartitionKey extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
