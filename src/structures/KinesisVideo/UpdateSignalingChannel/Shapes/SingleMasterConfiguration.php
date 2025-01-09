<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateSignalingChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MessageTtlSeconds
 */
class SingleMasterConfiguration extends Shape
{
    /**
     * @param array{MessageTtlSeconds?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
