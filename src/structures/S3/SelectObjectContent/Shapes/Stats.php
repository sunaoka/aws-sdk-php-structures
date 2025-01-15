<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $BytesScanned
 * @property int|null $BytesProcessed
 * @property int|null $BytesReturned
 */
class Stats extends Shape
{
    /**
     * @param array{
     *     BytesScanned?: int|null,
     *     BytesProcessed?: int|null,
     *     BytesReturned?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
