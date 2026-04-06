<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateBillingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AutoAssociate
 * @property string|null $ResponsibilityTransferArn
 */
class UpdateBillingGroupAccountGrouping extends Shape
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
