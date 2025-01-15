<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property M2ManagedApplicationAction|null $m2ManagedApplicationAction
 * @property M2NonManagedApplicationAction|null $m2NonManagedApplicationAction
 * @property CloudFormationAction|null $cloudFormationAction
 */
class ResourceAction extends Shape
{
    /**
     * @param array{
     *     m2ManagedApplicationAction?: M2ManagedApplicationAction|null,
     *     m2NonManagedApplicationAction?: M2NonManagedApplicationAction|null,
     *     cloudFormationAction?: CloudFormationAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
