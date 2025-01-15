<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTimeToLive\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLING'|'DISABLING'|'ENABLED'|'DISABLED'|null $TimeToLiveStatus
 * @property string|null $AttributeName
 */
class TimeToLiveDescription extends Shape
{
    /**
     * @param array{
     *     TimeToLiveStatus?: 'ENABLING'|'DISABLING'|'ENABLED'|'DISABLED'|null,
     *     AttributeName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
