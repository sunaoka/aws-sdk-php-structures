<?php

namespace Sunaoka\Aws\Structures\AppFabric\GetIngestionDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $streamName
 */
class FirehoseStream extends Shape
{
    /**
     * @param array{streamName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
