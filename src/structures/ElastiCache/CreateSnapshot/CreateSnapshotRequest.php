<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReplicationGroupId
 * @property string|null $CacheClusterId
 * @property string $SnapshotName
 * @property string|null $KmsKeyId
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId?: string|null,
     *     CacheClusterId?: string|null,
     *     SnapshotName: string,
     *     KmsKeyId?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
