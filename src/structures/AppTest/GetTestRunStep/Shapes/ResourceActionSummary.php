<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudFormationStepSummary $cloudFormation
 * @property M2ManagedApplicationStepSummary $m2ManagedApplication
 * @property M2NonManagedApplicationStepSummary $m2NonManagedApplication
 */
class ResourceActionSummary extends Shape
{
    /**
     * @param array{
     *     cloudFormation?: CloudFormationStepSummary,
     *     m2ManagedApplication?: M2ManagedApplicationStepSummary,
     *     m2NonManagedApplication?: M2NonManagedApplicationStepSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
