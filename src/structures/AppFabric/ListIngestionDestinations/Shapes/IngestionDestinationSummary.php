<?php

namespace Sunaoka\Aws\Structures\AppFabric\ListIngestionDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 */
class IngestionDestinationSummary extends Shape
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
