<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteRelationalDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property bool|null $skipFinalSnapshot
 * @property string|null $finalRelationalDatabaseSnapshotName
 */
class DeleteRelationalDatabaseRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     skipFinalSnapshot?: bool|null,
     *     finalRelationalDatabaseSnapshotName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
