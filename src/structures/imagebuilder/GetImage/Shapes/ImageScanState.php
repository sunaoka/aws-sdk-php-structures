<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'SCANNING'|'COLLECTING'|'COMPLETED'|'ABANDONED'|'FAILED'|'TIMED_OUT'|null $status
 * @property string|null $reason
 */
class ImageScanState extends Shape
{
    /**
     * @param array{
     *     status?: 'PENDING'|'SCANNING'|'COLLECTING'|'COMPLETED'|'ABANDONED'|'FAILED'|'TIMED_OUT'|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
