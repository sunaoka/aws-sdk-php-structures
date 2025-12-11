<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateAnycastIpList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property 'ipv4'|'ipv6'|'dualstack'|null $IpAddressType
 * @property string $IfMatch
 */
class UpdateAnycastIpListRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     IpAddressType?: 'ipv4'|'ipv6'|'dualstack'|null,
     *     IfMatch: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
