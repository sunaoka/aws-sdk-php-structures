<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstanceUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppInstanceUserArn
 * @property string $Name
 * @property string $Metadata
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 * @property ExpirationSettings $ExpirationSettings
 */
class AppInstanceUser extends Shape
{
    /**
     * @param array{
     *     AppInstanceUserArn?: string,
     *     Name?: string,
     *     Metadata?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     ExpirationSettings?: ExpirationSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
