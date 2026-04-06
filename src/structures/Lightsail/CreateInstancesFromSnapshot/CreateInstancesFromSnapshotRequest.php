<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateInstancesFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $instanceNames
 * @property array<string, list<Shapes\DiskMap>>|null $attachedDiskMapping
 * @property string $availabilityZone
 * @property string|null $instanceSnapshotName
 * @property string $bundleId
 * @property string|null $userData
 * @property string|null $keyPairName
 * @property list<Shapes\Tag>|null $tags
 * @property list<Shapes\AddOnRequest>|null $addOns
 * @property 'dualstack'|'ipv4'|'ipv6'|null $ipAddressType
 * @property string|null $sourceInstanceName
 * @property string|null $restoreDate
 * @property bool|null $useLatestRestorableAutoSnapshot
 */
class CreateInstancesFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     instanceNames: list<string>,
     *     attachedDiskMapping?: array<string, list<Shapes\DiskMap>>|null,
     *     availabilityZone: string,
     *     instanceSnapshotName?: string|null,
     *     bundleId: string,
     *     userData?: string|null,
     *     keyPairName?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     addOns?: list<Shapes\AddOnRequest>|null,
     *     ipAddressType?: 'dualstack'|'ipv4'|'ipv6'|null,
     *     sourceInstanceName?: string|null,
     *     restoreDate?: string|null,
     *     useLatestRestorableAutoSnapshot?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
