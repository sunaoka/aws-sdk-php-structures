<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateWorkforce\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcId
 * @property list<string> $SecurityGroupIds
 * @property list<string> $Subnets
 * @property string $VpcEndpointId
 */
class WorkforceVpcConfigResponse extends Shape
{
    /**
     * @param array{
     *     VpcId: string,
     *     SecurityGroupIds: list<string>,
     *     Subnets: list<string>,
     *     VpcEndpointId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
