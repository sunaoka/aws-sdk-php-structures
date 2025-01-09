<?php

namespace Sunaoka\Aws\Structures\Chime\ListVoiceConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VoiceConnectorId
 * @property 'us-east-1'|'us-west-2' $AwsRegion
 * @property string $Name
 * @property string $OutboundHostName
 * @property bool $RequireEncryption
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 * @property string $VoiceConnectorArn
 */
class VoiceConnector extends Shape
{
    /**
     * @param array{
     *     VoiceConnectorId?: string,
     *     AwsRegion?: 'us-east-1'|'us-west-2',
     *     Name?: string,
     *     OutboundHostName?: string,
     *     RequireEncryption?: bool,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     VoiceConnectorArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
