<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vpcId
 * @property list<string>|null $subnetIds
 * @property string|null $securityGroupId
 */
class VpcPropertiesPatch extends Shape
{
    /**
     * @param array{
     *     vpcId?: string|null,
     *     subnetIds?: list<string>|null,
     *     securityGroupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
