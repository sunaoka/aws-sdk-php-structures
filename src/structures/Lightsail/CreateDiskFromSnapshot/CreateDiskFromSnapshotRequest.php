<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDiskFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $diskName
 * @property string|null $diskSnapshotName
 * @property string $availabilityZone
 * @property int $sizeInGb
 * @property list<Shapes\Tag>|null $tags
 * @property list<Shapes\AddOnRequest>|null $addOns
 * @property string|null $sourceDiskName
 * @property string|null $restoreDate
 * @property bool|null $useLatestRestorableAutoSnapshot
 */
class CreateDiskFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     diskName: string,
     *     diskSnapshotName?: string|null,
     *     availabilityZone: string,
     *     sizeInGb: int,
     *     tags?: list<Shapes\Tag>|null,
     *     addOns?: list<Shapes\AddOnRequest>|null,
     *     sourceDiskName?: string|null,
     *     restoreDate?: string|null,
     *     useLatestRestorableAutoSnapshot?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
