<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProductCodeId
 * @property 'devpay'|'marketplace'|null $ProductCodeType
 */
class ProductCode extends Shape
{
    /**
     * @param array{
     *     ProductCodeId?: string|null,
     *     ProductCodeType?: 'devpay'|'marketplace'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
