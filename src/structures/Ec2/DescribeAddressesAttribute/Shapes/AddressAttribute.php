<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAddressesAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PublicIp
 * @property string|null $AllocationId
 * @property string|null $PtrRecord
 * @property PtrUpdateStatus|null $PtrRecordUpdate
 */
class AddressAttribute extends Shape
{
    /**
     * @param array{
     *     PublicIp?: string|null,
     *     AllocationId?: string|null,
     *     PtrRecord?: string|null,
     *     PtrRecordUpdate?: PtrUpdateStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
