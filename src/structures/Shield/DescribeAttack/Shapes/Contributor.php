<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int $Value
 */
class Contributor extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Value?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
