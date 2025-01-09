<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SecurityGroupIds
 * @property list<string> $Subnets
 */
class VpcConfig extends Shape
{
    /**
     * @param array{
     *     SecurityGroupIds: list<string>,
     *     Subnets: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
