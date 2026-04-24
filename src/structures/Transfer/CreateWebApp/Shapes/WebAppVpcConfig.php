<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SubnetIds
 * @property string|null $VpcId
 * @property list<string>|null $SecurityGroupIds
 * @property 'IPV4'|'DUALSTACK'|null $IpAddressType
 */
class WebAppVpcConfig extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>|null,
     *     VpcId?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     IpAddressType?: 'IPV4'|'DUALSTACK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
