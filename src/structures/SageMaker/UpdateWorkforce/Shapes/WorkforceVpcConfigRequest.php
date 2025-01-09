<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateWorkforce\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcId
 * @property list<string> $SecurityGroupIds
 * @property list<string> $Subnets
 */
class WorkforceVpcConfigRequest extends Shape
{
    /**
     * @param array{
     *     VpcId?: string,
     *     SecurityGroupIds?: list<string>,
     *     Subnets?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
