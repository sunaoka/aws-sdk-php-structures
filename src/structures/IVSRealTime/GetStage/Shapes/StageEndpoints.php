<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $events
 * @property string $whip
 * @property string $rtmp
 * @property string $rtmps
 */
class StageEndpoints extends Shape
{
    /**
     * @param array{
     *     events?: string,
     *     whip?: string,
     *     rtmp?: string,
     *     rtmps?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
