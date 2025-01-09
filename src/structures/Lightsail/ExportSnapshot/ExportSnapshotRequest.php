<?php

namespace Sunaoka\Aws\Structures\Lightsail\ExportSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceSnapshotName
 */
class ExportSnapshotRequest extends Request
{
    /**
     * @param array{sourceSnapshotName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
