<?php

namespace Sunaoka\Aws\Structures\Ec2\ResetAddressAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PublicIp
 * @property string $AllocationId
 * @property string $PtrRecord
 * @property PtrUpdateStatus $PtrRecordUpdate
 */
class AddressAttribute extends Shape
{
    /**
     * @param array{
     *     PublicIp?: string,
     *     AllocationId?: string,
     *     PtrRecord?: string,
     *     PtrRecordUpdate?: PtrUpdateStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
