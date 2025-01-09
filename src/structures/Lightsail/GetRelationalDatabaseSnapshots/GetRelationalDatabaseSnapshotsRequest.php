<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pageToken
 */
class GetRelationalDatabaseSnapshotsRequest extends Request
{
    /**
     * @param array{pageToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
