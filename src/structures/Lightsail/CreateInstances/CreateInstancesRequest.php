<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $instanceNames
 * @property string $availabilityZone
 * @property string $customImageName
 * @property string $blueprintId
 * @property string $bundleId
 * @property string $userData
 * @property string $keyPairName
 * @property list<Shapes\Tag> $tags
 * @property list<Shapes\AddOnRequest> $addOns
 * @property 'dualstack'|'ipv4'|'ipv6' $ipAddressType
 */
class CreateInstancesRequest extends Request
{
    /**
     * @param array{
     *     instanceNames: list<string>,
     *     availabilityZone: string,
     *     customImageName?: string,
     *     blueprintId: string,
     *     bundleId: string,
     *     userData?: string,
     *     keyPairName?: string,
     *     tags?: list<Shapes\Tag>,
     *     addOns?: list<Shapes\AddOnRequest>,
     *     ipAddressType?: 'dualstack'|'ipv4'|'ipv6'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
