<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateRelationalDatabaseFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property string|null $availabilityZone
 * @property bool|null $publiclyAccessible
 * @property string|null $relationalDatabaseSnapshotName
 * @property string|null $relationalDatabaseBundleId
 * @property string|null $sourceRelationalDatabaseName
 * @property \Aws\Api\DateTimeResult|null $restoreTime
 * @property bool|null $useLatestRestorableTime
 * @property list<Shapes\Tag>|null $tags
 */
class CreateRelationalDatabaseFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     availabilityZone?: string|null,
     *     publiclyAccessible?: bool|null,
     *     relationalDatabaseSnapshotName?: string|null,
     *     relationalDatabaseBundleId?: string|null,
     *     sourceRelationalDatabaseName?: string|null,
     *     restoreTime?: \Aws\Api\DateTimeResult|null,
     *     useLatestRestorableTime?: bool|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
