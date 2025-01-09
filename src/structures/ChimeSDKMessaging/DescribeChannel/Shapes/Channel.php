<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ChannelArn
 * @property 'UNRESTRICTED'|'RESTRICTED' $Mode
 * @property 'PUBLIC'|'PRIVATE' $Privacy
 * @property string $Metadata
 * @property Identity $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastMessageTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 * @property string $ChannelFlowArn
 * @property ElasticChannelConfiguration $ElasticChannelConfiguration
 * @property ExpirationSettings $ExpirationSettings
 */
class Channel extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ChannelArn?: string,
     *     Mode?: 'UNRESTRICTED'|'RESTRICTED',
     *     Privacy?: 'PUBLIC'|'PRIVATE',
     *     Metadata?: string,
     *     CreatedBy?: Identity,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     LastMessageTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     ChannelFlowArn?: string,
     *     ElasticChannelConfiguration?: ElasticChannelConfiguration,
     *     ExpirationSettings?: ExpirationSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
