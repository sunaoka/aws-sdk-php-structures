<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateServerlessCacheSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerlessCacheSnapshotName
 * @property string $ServerlessCacheName
 * @property string|null $KmsKeyId
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateServerlessCacheSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ServerlessCacheSnapshotName: string,
     *     ServerlessCacheName: string,
     *     KmsKeyId?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
