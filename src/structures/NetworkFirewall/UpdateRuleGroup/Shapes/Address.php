<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AddressDefinition
 */
class Address extends Shape
{
    /**
     * @param array{AddressDefinition: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
