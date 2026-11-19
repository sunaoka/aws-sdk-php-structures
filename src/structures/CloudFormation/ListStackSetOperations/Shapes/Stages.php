<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RoleProvisioning|null $RoleProvisioning
 * @property StackInstancesDeployment|null $StackInstancesDeployment
 */
class Stages extends Shape
{
    /**
     * @param array{
     *     RoleProvisioning?: RoleProvisioning|null,
     *     StackInstancesDeployment?: StackInstancesDeployment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
