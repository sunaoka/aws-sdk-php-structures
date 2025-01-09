<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteRelationalDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property bool $skipFinalSnapshot
 * @property string $finalRelationalDatabaseSnapshotName
 */
class DeleteRelationalDatabaseRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     skipFinalSnapshot?: bool,
     *     finalRelationalDatabaseSnapshotName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
