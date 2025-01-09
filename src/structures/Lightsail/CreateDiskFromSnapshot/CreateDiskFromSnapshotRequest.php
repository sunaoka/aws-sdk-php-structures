<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDiskFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $diskName
 * @property string $diskSnapshotName
 * @property string $availabilityZone
 * @property int $sizeInGb
 * @property list<Shapes\Tag> $tags
 * @property list<Shapes\AddOnRequest> $addOns
 * @property string $sourceDiskName
 * @property string $restoreDate
 * @property bool $useLatestRestorableAutoSnapshot
 */
class CreateDiskFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     diskName: string,
     *     diskSnapshotName?: string,
     *     availabilityZone: string,
     *     sizeInGb: int,
     *     tags?: list<Shapes\Tag>,
     *     addOns?: list<Shapes\AddOnRequest>,
     *     sourceDiskName?: string,
     *     restoreDate?: string,
     *     useLatestRestorableAutoSnapshot?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
