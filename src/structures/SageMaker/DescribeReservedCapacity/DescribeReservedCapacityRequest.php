<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeReservedCapacity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedCapacityArn
 */
class DescribeReservedCapacityRequest extends Request
{
    /**
     * @param array{ReservedCapacityArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
