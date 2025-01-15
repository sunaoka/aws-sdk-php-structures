<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnapshotARN
 * @property 'CLONE'|'FULL_COPY'|'INCREMENTAL_COPY'|null $CopyStrategy
 */
class OpenZFSOriginSnapshotConfiguration extends Shape
{
    /**
     * @param array{
     *     SnapshotARN?: string|null,
     *     CopyStrategy?: 'CLONE'|'FULL_COPY'|'INCREMENTAL_COPY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
