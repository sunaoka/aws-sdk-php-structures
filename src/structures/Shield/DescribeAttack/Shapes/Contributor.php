<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property int|null $Value
 */
class Contributor extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Value?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
