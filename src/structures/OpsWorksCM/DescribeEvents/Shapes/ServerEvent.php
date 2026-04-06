<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $ServerName
 * @property string|null $Message
 * @property string|null $LogUrl
 */
class ServerEvent extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     ServerName?: string|null,
     *     Message?: string|null,
     *     LogUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
