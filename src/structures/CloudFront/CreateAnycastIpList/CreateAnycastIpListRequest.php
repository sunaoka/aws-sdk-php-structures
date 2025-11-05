<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateAnycastIpList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int $IpCount
 * @property Shapes\Tags|null $Tags
 * @property 'ipv4'|'ipv6'|'dualstack'|null $IpAddressType
 */
class CreateAnycastIpListRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IpCount: int,
     *     Tags?: Shapes\Tags|null,
     *     IpAddressType?: 'ipv4'|'ipv6'|'dualstack'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
