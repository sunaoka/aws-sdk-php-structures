<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CopyServerlessCacheSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceServerlessCacheSnapshotName
 * @property string $TargetServerlessCacheSnapshotName
 * @property string|null $KmsKeyId
 * @property list<Shapes\Tag>|null $Tags
 */
class CopyServerlessCacheSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SourceServerlessCacheSnapshotName: string,
     *     TargetServerlessCacheSnapshotName: string,
     *     KmsKeyId?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
