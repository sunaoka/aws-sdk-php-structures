<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property M2ManagedApplicationSummary|null $m2ManagedApplication
 * @property M2NonManagedApplicationSummary|null $m2NonManagedApplication
 */
class MainframeResourceSummary extends Shape
{
    /**
     * @param array{
     *     m2ManagedApplication?: M2ManagedApplicationSummary|null,
     *     m2NonManagedApplication?: M2NonManagedApplicationSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
