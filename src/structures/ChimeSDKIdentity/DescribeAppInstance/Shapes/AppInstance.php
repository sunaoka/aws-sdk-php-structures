<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppInstanceArn
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 * @property string $Metadata
 */
class AppInstance extends Shape
{
    /**
     * @param array{
     *     AppInstanceArn?: string,
     *     Name?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     Metadata?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
