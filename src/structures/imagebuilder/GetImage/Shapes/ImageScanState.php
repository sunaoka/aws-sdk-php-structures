<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'SCANNING'|'COLLECTING'|'COMPLETED'|'ABANDONED'|'FAILED'|'TIMED_OUT' $status
 * @property string $reason
 */
class ImageScanState extends Shape
{
    /**
     * @param array{
     *     status?: 'PENDING'|'SCANNING'|'COLLECTING'|'COMPLETED'|'ABANDONED'|'FAILED'|'TIMED_OUT',
     *     reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
