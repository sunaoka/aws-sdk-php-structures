<?php

namespace Sunaoka\Aws\Structures\OSIS\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogGroup
 */
class CloudWatchLogDestination extends Shape
{
    /**
     * @param array{LogGroup: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
