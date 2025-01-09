<?php

namespace Sunaoka\Aws\Structures\Pricing\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceCode
 * @property list<string> $AttributeNames
 */
class Service extends Shape
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     AttributeNames?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
