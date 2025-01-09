<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetDifferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlobMetadata $beforeBlob
 * @property BlobMetadata $afterBlob
 * @property 'A'|'M'|'D' $changeType
 */
class Difference extends Shape
{
    /**
     * @param array{
     *     beforeBlob?: BlobMetadata,
     *     afterBlob?: BlobMetadata,
     *     changeType?: 'A'|'M'|'D'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
