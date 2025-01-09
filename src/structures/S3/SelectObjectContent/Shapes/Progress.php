<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BytesScanned
 * @property int $BytesProcessed
 * @property int $BytesReturned
 */
class Progress extends Shape
{
    /**
     * @param array{
     *     BytesScanned?: int,
     *     BytesProcessed?: int,
     *     BytesReturned?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
