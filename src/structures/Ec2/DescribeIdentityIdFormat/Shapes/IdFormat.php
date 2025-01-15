<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIdentityIdFormat\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Deadline
 * @property string|null $Resource
 * @property bool|null $UseLongIds
 */
class IdFormat extends Shape
{
    /**
     * @param array{
     *     Deadline?: \Aws\Api\DateTimeResult|null,
     *     Resource?: string|null,
     *     UseLongIds?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
