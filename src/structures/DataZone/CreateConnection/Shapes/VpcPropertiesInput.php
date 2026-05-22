<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vpcId
 * @property list<string> $subnetIds
 * @property string|null $securityGroupId
 */
class VpcPropertiesInput extends Shape
{
    /**
     * @param array{
     *     vpcId: string,
     *     subnetIds: list<string>,
     *     securityGroupId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
