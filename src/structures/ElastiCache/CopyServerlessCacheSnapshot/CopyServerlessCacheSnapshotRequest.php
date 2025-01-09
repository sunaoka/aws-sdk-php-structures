<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CopyServerlessCacheSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceServerlessCacheSnapshotName
 * @property string $TargetServerlessCacheSnapshotName
 * @property string $KmsKeyId
 * @property list<Shapes\Tag> $Tags
 */
class CopyServerlessCacheSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SourceServerlessCacheSnapshotName: string,
     *     TargetServerlessCacheSnapshotName: string,
     *     KmsKeyId?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
