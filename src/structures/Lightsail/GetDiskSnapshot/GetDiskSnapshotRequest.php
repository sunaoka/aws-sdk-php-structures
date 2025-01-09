<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDiskSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $diskSnapshotName
 */
class GetDiskSnapshotRequest extends Request
{
    /**
     * @param array{diskSnapshotName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
