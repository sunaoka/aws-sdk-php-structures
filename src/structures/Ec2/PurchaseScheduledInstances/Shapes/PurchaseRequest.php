<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InstanceCount
 * @property string $PurchaseToken
 */
class PurchaseRequest extends Shape
{
    /**
     * @param array{
     *     InstanceCount: int,
     *     PurchaseToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
