<?php

namespace Sunaoka\Aws\Structures\Ses\CreateReceiptFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property ReceiptIpFilter $IpFilter
 */
class ReceiptFilter extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     IpFilter: ReceiptIpFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
