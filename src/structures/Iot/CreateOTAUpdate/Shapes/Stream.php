<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $streamId
 * @property int $fileId
 */
class Stream extends Shape
{
    /**
     * @param array{
     *     streamId?: string,
     *     fileId?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
