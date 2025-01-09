<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteRelationalDatabaseSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseSnapshotName
 */
class DeleteRelationalDatabaseSnapshotRequest extends Request
{
    /**
     * @param array{relationalDatabaseSnapshotName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
