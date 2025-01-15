<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDiskSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $pageToken
 */
class GetDiskSnapshotsRequest extends Request
{
    /**
     * @param array{pageToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
