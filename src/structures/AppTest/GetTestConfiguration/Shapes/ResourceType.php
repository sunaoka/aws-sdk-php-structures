<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudFormation|null $cloudFormation
 * @property M2ManagedApplication|null $m2ManagedApplication
 * @property M2NonManagedApplication|null $m2NonManagedApplication
 */
class ResourceType extends Shape
{
    /**
     * @param array{
     *     cloudFormation?: CloudFormation|null,
     *     m2ManagedApplication?: M2ManagedApplication|null,
     *     m2NonManagedApplication?: M2NonManagedApplication|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
