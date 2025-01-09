<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CopySnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceSnapshotName
 * @property string $TargetSnapshotName
 * @property string $TargetBucket
 * @property string $KmsKeyId
 * @property list<Shapes\Tag> $Tags
 */
class CopySnapshotRequest extends Request
{
    /**
     * @param array{
     *     SourceSnapshotName: string,
     *     TargetSnapshotName: string,
     *     TargetBucket?: string,
     *     KmsKeyId?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
