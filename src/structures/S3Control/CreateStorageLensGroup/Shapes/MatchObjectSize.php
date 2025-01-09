<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateStorageLensGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BytesGreaterThan
 * @property int $BytesLessThan
 */
class MatchObjectSize extends Shape
{
    /**
     * @param array{
     *     BytesGreaterThan?: int,
     *     BytesLessThan?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
