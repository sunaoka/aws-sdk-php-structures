<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateAnycastIpList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int $IpCount
 * @property Shapes\Tags|null $Tags
 * @property 'ipv4'|'ipv6'|'dualstack'|null $IpAddressType
 * @property list<Shapes\IpamCidrConfig>|null $IpamCidrConfigs
 */
class CreateAnycastIpListRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IpCount: int,
     *     Tags?: Shapes\Tags|null,
     *     IpAddressType?: 'ipv4'|'ipv6'|'dualstack'|null,
     *     IpamCidrConfigs?: list<Shapes\IpamCidrConfig>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
