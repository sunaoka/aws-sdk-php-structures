<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $SnowflakeRole
 */
class SnowflakeRoleConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     SnowflakeRole?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
