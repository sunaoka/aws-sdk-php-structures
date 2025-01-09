<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 */
class KinesisVideoStream extends Shape
{
    /**
     * @param array{Arn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
