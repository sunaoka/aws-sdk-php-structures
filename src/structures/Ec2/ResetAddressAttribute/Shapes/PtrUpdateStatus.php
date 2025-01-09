<?php

namespace Sunaoka\Aws\Structures\Ec2\ResetAddressAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property string $Status
 * @property string $Reason
 */
class PtrUpdateStatus extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     Status?: string,
     *     Reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
