<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateWorkforce\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcId
 * @property list<string>|null $SecurityGroupIds
 * @property list<string>|null $Subnets
 */
class WorkforceVpcConfigRequest extends Shape
{
    /**
     * @param array{
     *     VpcId?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     Subnets?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
