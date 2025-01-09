<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $ServerName
 * @property string $Message
 * @property string $LogUrl
 */
class ServerEvent extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     ServerName?: string,
     *     Message?: string,
     *     LogUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
