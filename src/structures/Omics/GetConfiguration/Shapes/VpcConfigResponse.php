<?php

namespace Sunaoka\Aws\Structures\Omics\GetConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $securityGroupIds
 * @property list<string>|null $subnetIds
 * @property string|null $vpcId
 * @property string|null $vpcOwnerAccountId
 */
class VpcConfigResponse extends Shape
{
    /**
     * @param array{
     *     securityGroupIds?: list<string>|null,
     *     subnetIds?: list<string>|null,
     *     vpcId?: string|null,
     *     vpcOwnerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
