<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\UpdateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $events
 * @property string|null $whip
 * @property string|null $rtmp
 * @property string|null $rtmps
 */
class StageEndpoints extends Shape
{
    /**
     * @param array{
     *     events?: string|null,
     *     whip?: string|null,
     *     rtmp?: string|null,
     *     rtmps?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
