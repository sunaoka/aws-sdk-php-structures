<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property M2ManagedApplicationSummary $m2ManagedApplication
 * @property M2NonManagedApplicationSummary $m2NonManagedApplication
 */
class MainframeResourceSummary extends Shape
{
    /**
     * @param array{
     *     m2ManagedApplication?: M2ManagedApplicationSummary,
     *     m2NonManagedApplication?: M2NonManagedApplicationSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
