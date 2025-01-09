<?php

namespace Sunaoka\Aws\Structures\Iot\GetOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $streamId
 * @property int<0, 255> $fileId
 */
class Stream extends Shape
{
    /**
     * @param array{
     *     streamId?: string,
     *     fileId?: int<0, 255>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
