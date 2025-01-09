<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceSnapshotName
 */
class GetInstanceSnapshotRequest extends Request
{
    /**
     * @param array{instanceSnapshotName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
