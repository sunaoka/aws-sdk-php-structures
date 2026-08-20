<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateVirtualInterfaceAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualInterfaceId
 * @property int|null $mtu
 * @property bool|null $enableSiteLink
 * @property string|null $virtualInterfaceName
 * @property int<0, max>|null $prefixPoolAllocatedCountIpv4
 * @property int<0, max>|null $prefixPoolAllocatedCountIpv6
 * @property string|null $rateLimit
 */
class UpdateVirtualInterfaceAttributesRequest extends Request
{
    /**
     * @param array{
     *     virtualInterfaceId: string,
     *     mtu?: int|null,
     *     enableSiteLink?: bool|null,
     *     virtualInterfaceName?: string|null,
     *     prefixPoolAllocatedCountIpv4?: int<0, max>|null,
     *     prefixPoolAllocatedCountIpv6?: int<0, max>|null,
     *     rateLimit?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
