<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListWorkforces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcId
 * @property list<string> $SecurityGroupIds
 * @property list<string> $Subnets
 * @property string|null $VpcEndpointId
 */
class WorkforceVpcConfigResponse extends Shape
{
    /**
     * @param array{
     *     VpcId: string,
     *     SecurityGroupIds: list<string>,
     *     Subnets: list<string>,
     *     VpcEndpointId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
