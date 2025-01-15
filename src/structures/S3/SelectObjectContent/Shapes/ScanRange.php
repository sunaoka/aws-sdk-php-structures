<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Start
 * @property int|null $End
 */
class ScanRange extends Shape
{
    /**
     * @param array{
     *     Start?: int|null,
     *     End?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
