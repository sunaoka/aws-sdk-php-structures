<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $BytesGreaterThan
 * @property int|null $BytesLessThan
 */
class MatchObjectSize extends Shape
{
    /**
     * @param array{
     *     BytesGreaterThan?: int|null,
     *     BytesLessThan?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
