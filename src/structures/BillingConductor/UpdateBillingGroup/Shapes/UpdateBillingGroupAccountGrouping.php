<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateBillingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AutoAssociate
 */
class UpdateBillingGroupAccountGrouping extends Shape
{
    /**
     * @param array{AutoAssociate?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
