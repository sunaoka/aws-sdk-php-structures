<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteDiskSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $diskSnapshotName
 */
class DeleteDiskSnapshotRequest extends Request
{
    /**
     * @param array{diskSnapshotName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
