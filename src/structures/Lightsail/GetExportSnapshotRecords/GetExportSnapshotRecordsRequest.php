<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetExportSnapshotRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pageToken
 */
class GetExportSnapshotRecordsRequest extends Request
{
    /**
     * @param array{pageToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
