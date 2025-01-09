<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateServerlessCacheSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerlessCacheSnapshotName
 * @property string $ServerlessCacheName
 * @property string $KmsKeyId
 * @property list<Shapes\Tag> $Tags
 */
class CreateServerlessCacheSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ServerlessCacheSnapshotName: string,
     *     ServerlessCacheName: string,
     *     KmsKeyId?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
