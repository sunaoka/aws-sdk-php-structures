<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateRelationalDatabaseSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property string $relationalDatabaseSnapshotName
 * @property list<Shapes\Tag>|null $tags
 */
class CreateRelationalDatabaseSnapshotRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     relationalDatabaseSnapshotName: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
