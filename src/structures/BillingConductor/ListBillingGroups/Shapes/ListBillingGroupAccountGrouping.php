<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListBillingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AutoAssociate
 */
class ListBillingGroupAccountGrouping extends Shape
{
    /**
     * @param array{AutoAssociate?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
