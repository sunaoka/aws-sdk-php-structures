<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property string $CacheClusterId
 * @property string $SnapshotName
 * @property string $KmsKeyId
 * @property list<Shapes\Tag> $Tags
 */
class CreateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId?: string,
     *     CacheClusterId?: string,
     *     SnapshotName: string,
     *     KmsKeyId?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
