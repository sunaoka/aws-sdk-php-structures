<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetDifferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $blobId
 * @property string|null $path
 * @property string|null $mode
 */
class BlobMetadata extends Shape
{
    /**
     * @param array{
     *     blobId?: string|null,
     *     path?: string|null,
     *     mode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
