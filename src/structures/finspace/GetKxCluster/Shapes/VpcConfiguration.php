<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vpcId
 * @property list<string>|null $securityGroupIds
 * @property list<string>|null $subnetIds
 * @property 'IP_V4'|null $ipAddressType
 */
class VpcConfiguration extends Shape
{
    /**
     * @param array{
     *     vpcId?: string|null,
     *     securityGroupIds?: list<string>|null,
     *     subnetIds?: list<string>|null,
     *     ipAddressType?: 'IP_V4'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
