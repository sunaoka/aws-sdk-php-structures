<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $instanceNames
 * @property string $availabilityZone
 * @property string|null $customImageName
 * @property string $blueprintId
 * @property string $bundleId
 * @property string|null $userData
 * @property string|null $keyPairName
 * @property list<Shapes\Tag>|null $tags
 * @property list<Shapes\AddOnRequest>|null $addOns
 * @property 'dualstack'|'ipv4'|'ipv6'|null $ipAddressType
 */
class CreateInstancesRequest extends Request
{
    /**
     * @param array{
     *     instanceNames: list<string>,
     *     availabilityZone: string,
     *     customImageName?: string|null,
     *     blueprintId: string,
     *     bundleId: string,
     *     userData?: string|null,
     *     keyPairName?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     addOns?: list<Shapes\AddOnRequest>|null,
     *     ipAddressType?: 'dualstack'|'ipv4'|'ipv6'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
