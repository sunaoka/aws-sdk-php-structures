<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteServerlessCacheSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerlessCacheSnapshotName
 */
class DeleteServerlessCacheSnapshotRequest extends Request
{
    /**
     * @param array{ServerlessCacheSnapshotName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
