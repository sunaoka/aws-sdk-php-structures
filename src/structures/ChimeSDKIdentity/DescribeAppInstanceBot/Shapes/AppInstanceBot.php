<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstanceBot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppInstanceBotArn
 * @property string|null $Name
 * @property Configuration|null $Configuration
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 * @property string|null $Metadata
 */
class AppInstanceBot extends Shape
{
    /**
     * @param array{
     *     AppInstanceBotArn?: string|null,
     *     Name?: string|null,
     *     Configuration?: Configuration|null,
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
