<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudFormation $cloudFormation
 * @property M2ManagedApplication $m2ManagedApplication
 * @property M2NonManagedApplication $m2NonManagedApplication
 */
class ResourceType extends Shape
{
    /**
     * @param array{
     *     cloudFormation?: CloudFormation,
     *     m2ManagedApplication?: M2ManagedApplication,
     *     m2NonManagedApplication?: M2NonManagedApplication
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
