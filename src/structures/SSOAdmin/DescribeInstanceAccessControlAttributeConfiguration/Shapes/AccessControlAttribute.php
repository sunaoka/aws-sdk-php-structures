<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeInstanceAccessControlAttributeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property AccessControlAttributeValue $Value
 */
class AccessControlAttribute extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Value: AccessControlAttributeValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
