<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowVpcInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'ena'|'efa'|null $NetworkInterfaceType
 * @property string $RoleArn
 * @property list<string> $SecurityGroupIds
 * @property string $SubnetId
 * @property array<string, string>|null $VpcInterfaceTags
 */
class VpcInterfaceRequest extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     NetworkInterfaceType?: 'ena'|'efa'|null,
     *     RoleArn: string,
     *     SecurityGroupIds: list<string>,
     *     SubnetId: string,
     *     VpcInterfaceTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
