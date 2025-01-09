<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateRelationalDatabaseFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property string $availabilityZone
 * @property bool $publiclyAccessible
 * @property string $relationalDatabaseSnapshotName
 * @property string $relationalDatabaseBundleId
 * @property string $sourceRelationalDatabaseName
 * @property \Aws\Api\DateTimeResult $restoreTime
 * @property bool $useLatestRestorableTime
 * @property list<Shapes\Tag> $tags
 */
class CreateRelationalDatabaseFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     availabilityZone?: string,
     *     publiclyAccessible?: bool,
     *     relationalDatabaseSnapshotName?: string,
     *     relationalDatabaseBundleId?: string,
     *     sourceRelationalDatabaseName?: string,
     *     restoreTime?: \Aws\Api\DateTimeResult,
     *     useLatestRestorableTime?: bool,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
