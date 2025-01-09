<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $NetworkInterfaceIds
 * @property 'ena'|'efa' $NetworkInterfaceType
 * @property string $RoleArn
 * @property list<string> $SecurityGroupIds
 * @property string $SubnetId
 */
class VpcInterface extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     NetworkInterfaceIds: list<string>,
     *     NetworkInterfaceType: 'ena'|'efa',
     *     RoleArn: string,
     *     SecurityGroupIds: list<string>,
     *     SubnetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
