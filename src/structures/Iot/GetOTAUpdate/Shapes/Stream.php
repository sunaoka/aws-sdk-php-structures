<?php

namespace Sunaoka\Aws\Structures\Iot\GetOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $streamId
 * @property int<0, 255>|null $fileId
 */
class Stream extends Shape
{
    /**
     * @param array{
     *     streamId?: string|null,
     *     fileId?: int<0, 255>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
