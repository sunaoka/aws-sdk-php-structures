<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetDifferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $blobId
 * @property string $path
 * @property string $mode
 */
class BlobMetadata extends Shape
{
    /**
     * @param array{
     *     blobId?: string,
     *     path?: string,
     *     mode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
