<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredModelAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $regex
 */
class MetricDefinition extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     regex: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
