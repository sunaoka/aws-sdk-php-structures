<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListBillingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AutoAssociate
 * @property string|null $ResponsibilityTransferArn
 */
class ListBillingGroupAccountGrouping extends Shape
{
    /**
     * @param array{
     *     AutoAssociate?: bool|null,
     *     ResponsibilityTransferArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
