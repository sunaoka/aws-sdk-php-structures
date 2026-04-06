<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotARN
 * @property 'CLONE'|'FULL_COPY'|'INCREMENTAL_COPY' $CopyStrategy
 */
class CreateOpenZFSOriginSnapshotConfiguration extends Shape
{
    /**
     * @param array{
     *     SnapshotARN: string,
     *     CopyStrategy: 'CLONE'|'FULL_COPY'|'INCREMENTAL_COPY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
