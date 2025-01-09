<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteInstanceSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceSnapshotName
 */
class DeleteInstanceSnapshotRequest extends Request
{
    /**
     * @param array{instanceSnapshotName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
