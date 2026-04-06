<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DescribeAccountAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property int|null $Maximum
 * @property int|null $Used
 */
class AccountAttribute extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Maximum?: int|null,
     *     Used?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
