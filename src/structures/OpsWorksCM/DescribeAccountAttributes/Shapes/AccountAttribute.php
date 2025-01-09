<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DescribeAccountAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int $Maximum
 * @property int $Used
 */
class AccountAttribute extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Maximum?: int,
     *     Used?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
