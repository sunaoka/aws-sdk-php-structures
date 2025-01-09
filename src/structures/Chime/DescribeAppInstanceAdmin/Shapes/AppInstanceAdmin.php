<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeAppInstanceAdmin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identity $Admin
 * @property string $AppInstanceArn
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class AppInstanceAdmin extends Shape
{
    /**
     * @param array{
     *     Admin?: Identity,
     *     AppInstanceArn?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
