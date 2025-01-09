<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'ena'|'efa' $NetworkInterfaceType
 * @property string $RoleArn
 * @property list<string> $SecurityGroupIds
 * @property string $SubnetId
 */
class VpcInterfaceRequest extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     NetworkInterfaceType?: 'ena'|'efa',
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
