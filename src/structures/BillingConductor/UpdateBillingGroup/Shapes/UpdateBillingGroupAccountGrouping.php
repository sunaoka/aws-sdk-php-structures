<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateBillingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AutoAssociate
 */
class UpdateBillingGroupAccountGrouping extends Shape
{
    /**
     * @param array{AutoAssociate?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
