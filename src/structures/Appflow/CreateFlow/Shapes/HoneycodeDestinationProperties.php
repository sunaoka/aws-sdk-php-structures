<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $object
 * @property ErrorHandlingConfig $errorHandlingConfig
 */
class HoneycodeDestinationProperties extends Shape
{
    /**
     * @param array{
     *     object: string,
     *     errorHandlingConfig?: ErrorHandlingConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
