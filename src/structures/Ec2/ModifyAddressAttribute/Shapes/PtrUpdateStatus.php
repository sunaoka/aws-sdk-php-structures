<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyAddressAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property string|null $Status
 * @property string|null $Reason
 */
class PtrUpdateStatus extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     Status?: string|null,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
