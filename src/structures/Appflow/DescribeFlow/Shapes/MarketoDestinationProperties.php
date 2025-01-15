<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $object
 * @property ErrorHandlingConfig|null $errorHandlingConfig
 */
class MarketoDestinationProperties extends Shape
{
    /**
     * @param array{
     *     object: string,
     *     errorHandlingConfig?: ErrorHandlingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
