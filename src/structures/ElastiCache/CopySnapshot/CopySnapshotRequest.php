<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CopySnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceSnapshotName
 * @property string $TargetSnapshotName
 * @property string|null $TargetBucket
 * @property string|null $KmsKeyId
 * @property list<Shapes\Tag>|null $Tags
 */
class CopySnapshotRequest extends Request
{
    /**
     * @param array{
     *     SourceSnapshotName: string,
     *     TargetSnapshotName: string,
     *     TargetBucket?: string|null,
     *     KmsKeyId?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
