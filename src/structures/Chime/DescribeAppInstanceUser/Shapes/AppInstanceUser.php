<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeAppInstanceUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppInstanceUserArn
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property string $Metadata
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 */
class AppInstanceUser extends Shape
{
    /**
     * @param array{
     *     AppInstanceUserArn?: string,
     *     Name?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     Metadata?: string,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
