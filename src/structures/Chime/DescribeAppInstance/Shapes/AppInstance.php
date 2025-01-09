<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeAppInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppInstanceArn
 * @property string $Name
 * @property string $Metadata
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 */
class AppInstance extends Shape
{
    /**
     * @param array{
     *     AppInstanceArn?: string,
     *     Name?: string,
     *     Metadata?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
