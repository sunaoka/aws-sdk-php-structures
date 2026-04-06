<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $ChannelArn
 * @property 'UNRESTRICTED'|'RESTRICTED'|null $Mode
 * @property 'PUBLIC'|'PRIVATE'|null $Privacy
 * @property string|null $Metadata
 * @property Identity|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastMessageTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class Channel extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ChannelArn?: string|null,
     *     Mode?: 'UNRESTRICTED'|'RESTRICTED'|null,
     *     Privacy?: 'PUBLIC'|'PRIVATE'|null,
     *     Metadata?: string|null,
     *     CreatedBy?: Identity|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastMessageTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
