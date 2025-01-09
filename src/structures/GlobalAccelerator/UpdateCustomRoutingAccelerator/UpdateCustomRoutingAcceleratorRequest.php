<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateCustomRoutingAccelerator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 * @property string $Name
 * @property 'IPV4'|'DUAL_STACK' $IpAddressType
 * @property list<string> $IpAddresses
 * @property bool $Enabled
 */
class UpdateCustomRoutingAcceleratorRequest extends Request
{
    /**
     * @param array{
     *     AcceleratorArn: string,
     *     Name?: string,
     *     IpAddressType?: 'IPV4'|'DUAL_STACK',
     *     IpAddresses?: list<string>,
     *     Enabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
