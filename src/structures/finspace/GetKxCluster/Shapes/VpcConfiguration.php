<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vpcId
 * @property list<string> $securityGroupIds
 * @property list<string> $subnetIds
 * @property 'IP_V4' $ipAddressType
 */
class VpcConfiguration extends Shape
{
    /**
     * @param array{
     *     vpcId?: string,
     *     securityGroupIds?: list<string>,
     *     subnetIds?: list<string>,
     *     ipAddressType?: 'IP_V4'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
