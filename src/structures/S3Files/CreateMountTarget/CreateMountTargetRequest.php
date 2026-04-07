<?php

namespace Sunaoka\Aws\Structures\S3Files\CreateMountTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fileSystemId
 * @property string $subnetId
 * @property string|null $ipv4Address
 * @property string|null $ipv6Address
 * @property 'IPV4_ONLY'|'IPV6_ONLY'|'DUAL_STACK'|null $ipAddressType
 * @property list<string>|null $securityGroups
 */
class CreateMountTargetRequest extends Request
{
    /**
     * @param array{
     *     fileSystemId: string,
     *     subnetId: string,
     *     ipv4Address?: string|null,
     *     ipv6Address?: string|null,
     *     ipAddressType?: 'IPV4_ONLY'|'IPV6_ONLY'|'DUAL_STACK'|null,
     *     securityGroups?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
