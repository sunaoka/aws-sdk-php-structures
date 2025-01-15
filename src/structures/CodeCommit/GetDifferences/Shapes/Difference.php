<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetDifferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlobMetadata|null $beforeBlob
 * @property BlobMetadata|null $afterBlob
 * @property 'A'|'M'|'D'|null $changeType
 */
class Difference extends Shape
{
    /**
     * @param array{
     *     beforeBlob?: BlobMetadata|null,
     *     afterBlob?: BlobMetadata|null,
     *     changeType?: 'A'|'M'|'D'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
