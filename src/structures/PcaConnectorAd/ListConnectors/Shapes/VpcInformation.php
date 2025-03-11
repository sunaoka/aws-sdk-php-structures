<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IPV4'|'DUALSTACK'|null $IpAddressType
 * @property list<string> $SecurityGroupIds
 */
class VpcInformation extends Shape
{
    /**
     * @param array{
     *     IpAddressType?: 'IPV4'|'DUALSTACK'|null,
     *     SecurityGroupIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
