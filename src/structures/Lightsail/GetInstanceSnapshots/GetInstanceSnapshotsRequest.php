<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pageToken
 */
class GetInstanceSnapshotsRequest extends Request
{
    /**
     * @param array{pageToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
