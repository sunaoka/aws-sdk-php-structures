<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstanceUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppInstanceUserArn
 * @property string|null $Name
 * @property string|null $Metadata
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 * @property ExpirationSettings|null $ExpirationSettings
 */
class AppInstanceUser extends Shape
{
    /**
     * @param array{
     *     AppInstanceUserArn?: string|null,
     *     Name?: string|null,
     *     Metadata?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ExpirationSettings?: ExpirationSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
