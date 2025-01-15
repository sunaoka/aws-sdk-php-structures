<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppInstanceArn
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 * @property string|null $Metadata
 */
class AppInstance extends Shape
{
    /**
     * @param array{
     *     AppInstanceArn?: string|null,
     *     Name?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Metadata?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
