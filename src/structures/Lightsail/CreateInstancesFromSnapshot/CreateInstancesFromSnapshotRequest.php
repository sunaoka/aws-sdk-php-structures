<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateInstancesFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $instanceNames
 * @property array<string, list<Shapes\DiskMap>> $attachedDiskMapping
 * @property string $availabilityZone
 * @property string $instanceSnapshotName
 * @property string $bundleId
 * @property string $userData
 * @property string $keyPairName
 * @property list<Shapes\Tag> $tags
 * @property list<Shapes\AddOnRequest> $addOns
 * @property 'dualstack'|'ipv4'|'ipv6' $ipAddressType
 * @property string $sourceInstanceName
 * @property string $restoreDate
 * @property bool $useLatestRestorableAutoSnapshot
 */
class CreateInstancesFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     instanceNames: list<string>,
     *     attachedDiskMapping?: array<string, list<Shapes\DiskMap>>,
     *     availabilityZone: string,
     *     instanceSnapshotName?: string,
     *     bundleId: string,
     *     userData?: string,
     *     keyPairName?: string,
     *     tags?: list<Shapes\Tag>,
     *     addOns?: list<Shapes\AddOnRequest>,
     *     ipAddressType?: 'dualstack'|'ipv4'|'ipv6',
     *     sourceInstanceName?: string,
     *     restoreDate?: string,
     *     useLatestRestorableAutoSnapshot?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
