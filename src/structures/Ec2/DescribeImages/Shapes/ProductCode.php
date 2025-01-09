<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProductCodeId
 * @property 'devpay'|'marketplace' $ProductCodeType
 */
class ProductCode extends Shape
{
    /**
     * @param array{
     *     ProductCodeId?: string,
     *     ProductCodeType?: 'devpay'|'marketplace'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
