<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteServerlessCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerlessCacheName
 * @property string|null $FinalSnapshotName
 */
class DeleteServerlessCacheRequest extends Request
{
    /**
     * @param array{
     *     ServerlessCacheName: string,
     *     FinalSnapshotName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
