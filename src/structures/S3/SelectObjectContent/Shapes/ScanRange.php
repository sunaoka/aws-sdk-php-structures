<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Start
 * @property int $End
 */
class ScanRange extends Shape
{
    /**
     * @param array{
     *     Start?: int,
     *     End?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
