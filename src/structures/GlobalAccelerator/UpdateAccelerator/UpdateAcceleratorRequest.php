<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateAccelerator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 * @property string|null $Name
 * @property 'IPV4'|'DUAL_STACK'|null $IpAddressType
 * @property list<string>|null $IpAddresses
 * @property bool|null $Enabled
 */
class UpdateAcceleratorRequest extends Request
{
    /**
     * @param array{
     *     AcceleratorArn: string,
     *     Name?: string|null,
     *     IpAddressType?: 'IPV4'|'DUAL_STACK'|null,
     *     IpAddresses?: list<string>|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
