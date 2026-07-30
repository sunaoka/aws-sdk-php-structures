<?php

namespace Sunaoka\Aws\Structures\Iam\SimulateCustomPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ServiceControlPolicyInputList
 */
class OrderedOrganizationPolicyType extends Shape
{
    /**
     * @param array{ServiceControlPolicyInputList?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
