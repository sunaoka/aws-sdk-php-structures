<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudFormationStepSummary|null $cloudFormation
 * @property M2ManagedApplicationStepSummary|null $m2ManagedApplication
 * @property M2NonManagedApplicationStepSummary|null $m2NonManagedApplication
 */
class ResourceActionSummary extends Shape
{
    /**
     * @param array{
     *     cloudFormation?: CloudFormationStepSummary|null,
     *     m2ManagedApplication?: M2ManagedApplicationStepSummary|null,
     *     m2NonManagedApplication?: M2NonManagedApplicationStepSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
