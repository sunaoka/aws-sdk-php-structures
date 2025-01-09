<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property M2ManagedApplicationAction $m2ManagedApplicationAction
 * @property M2NonManagedApplicationAction $m2NonManagedApplicationAction
 * @property CloudFormationAction $cloudFormationAction
 */
class ResourceAction extends Shape
{
    /**
     * @param array{
     *     m2ManagedApplicationAction?: M2ManagedApplicationAction,
     *     m2NonManagedApplicationAction?: M2NonManagedApplicationAction,
     *     cloudFormationAction?: CloudFormationAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
