<?php

namespace Sunaoka\Aws\Structures\Lightsail\StopRelationalDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property string|null $relationalDatabaseSnapshotName
 */
class StopRelationalDatabaseRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     relationalDatabaseSnapshotName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
