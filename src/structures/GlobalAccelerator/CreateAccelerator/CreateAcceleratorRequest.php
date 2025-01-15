<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateAccelerator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'IPV4'|'DUAL_STACK'|null $IpAddressType
 * @property list<string>|null $IpAddresses
 * @property bool|null $Enabled
 * @property string $IdempotencyToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAcceleratorRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IpAddressType?: 'IPV4'|'DUAL_STACK'|null,
     *     IpAddresses?: list<string>|null,
     *     Enabled?: bool|null,
     *     IdempotencyToken: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
