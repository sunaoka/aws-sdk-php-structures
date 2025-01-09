<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateAccelerator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'IPV4'|'DUAL_STACK' $IpAddressType
 * @property list<string> $IpAddresses
 * @property bool $Enabled
 * @property string $IdempotencyToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateAcceleratorRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IpAddressType?: 'IPV4'|'DUAL_STACK',
     *     IpAddresses?: list<string>,
     *     Enabled?: bool,
     *     IdempotencyToken: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
