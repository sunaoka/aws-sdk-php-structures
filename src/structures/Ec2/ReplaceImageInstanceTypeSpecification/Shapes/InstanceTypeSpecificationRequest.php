<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceImageInstanceTypeSpecification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SupportedInstanceTypes
 * @property list<string>|null $UnsupportedInstanceTypes
 */
class InstanceTypeSpecificationRequest extends Shape
{
    /**
     * @param array{
     *     SupportedInstanceTypes?: list<string>|null,
     *     UnsupportedInstanceTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
