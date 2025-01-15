<?php

namespace Sunaoka\Aws\Structures\Pricing\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceCode
 * @property list<string>|null $AttributeNames
 */
class Service extends Shape
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     AttributeNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
