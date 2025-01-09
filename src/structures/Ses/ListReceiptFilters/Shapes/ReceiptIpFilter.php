<?php

namespace Sunaoka\Aws\Structures\Ses\ListReceiptFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Block'|'Allow' $Policy
 * @property string $Cidr
 */
class ReceiptIpFilter extends Shape
{
    /**
     * @param array{
     *     Policy: 'Block'|'Allow',
     *     Cidr: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
