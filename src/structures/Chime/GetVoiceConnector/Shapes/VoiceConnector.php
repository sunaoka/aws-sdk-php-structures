<?php

namespace Sunaoka\Aws\Structures\Chime\GetVoiceConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VoiceConnectorId
 * @property 'us-east-1'|'us-west-2'|null $AwsRegion
 * @property string|null $Name
 * @property string|null $OutboundHostName
 * @property bool|null $RequireEncryption
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 * @property string|null $VoiceConnectorArn
 */
class VoiceConnector extends Shape
{
    /**
     * @param array{
     *     VoiceConnectorId?: string|null,
     *     AwsRegion?: 'us-east-1'|'us-west-2'|null,
     *     Name?: string|null,
     *     OutboundHostName?: string|null,
     *     RequireEncryption?: bool|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     VoiceConnectorArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
