<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateInstanceStorageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamArn
 */
class KinesisStreamConfig extends Shape
{
    /**
     * @param array{StreamArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
