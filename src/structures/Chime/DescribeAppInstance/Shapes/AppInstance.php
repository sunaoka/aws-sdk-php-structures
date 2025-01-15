<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeAppInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppInstanceArn
 * @property string|null $Name
 * @property string|null $Metadata
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class AppInstance extends Shape
{
    /**
     * @param array{
     *     AppInstanceArn?: string|null,
     *     Name?: string|null,
     *     Metadata?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
