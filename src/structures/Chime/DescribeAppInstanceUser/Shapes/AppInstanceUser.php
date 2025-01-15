<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeAppInstanceUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppInstanceUserArn
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property string|null $Metadata
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class AppInstanceUser extends Shape
{
    /**
     * @param array{
     *     AppInstanceUserArn?: string|null,
     *     Name?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Metadata?: string|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
