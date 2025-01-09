<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseSnapshotName
 */
class GetRelationalDatabaseSnapshotRequest extends Request
{
    /**
     * @param array{relationalDatabaseSnapshotName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
