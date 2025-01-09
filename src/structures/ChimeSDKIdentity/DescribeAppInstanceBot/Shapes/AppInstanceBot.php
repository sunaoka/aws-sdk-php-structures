<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstanceBot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppInstanceBotArn
 * @property string $Name
 * @property Configuration $Configuration
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 * @property string $Metadata
 */
class AppInstanceBot extends Shape
{
    /**
     * @param array{
     *     AppInstanceBotArn?: string,
     *     Name?: string,
     *     Configuration?: Configuration,
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
