<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VoiceConnectorId
 * @property 'us-east-1'|'us-west-2'|'ca-central-1'|'eu-central-1'|'eu-west-1'|'eu-west-2'|'ap-northeast-2'|'ap-northeast-1'|'ap-southeast-1'|'ap-southeast-2' $AwsRegion
 * @property string $Name
 * @property string $OutboundHostName
 * @property bool $RequireEncryption
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 * @property string $VoiceConnectorArn
 * @property 'CONNECT_CALL_TRANSFER_CONNECTOR'|'CONNECT_ANALYTICS_CONNECTOR' $IntegrationType
 */
class VoiceConnector extends Shape
{
    /**
     * @param array{
     *     VoiceConnectorId?: string,
     *     AwsRegion?: 'us-east-1'|'us-west-2'|'ca-central-1'|'eu-central-1'|'eu-west-1'|'eu-west-2'|'ap-northeast-2'|'ap-northeast-1'|'ap-southeast-1'|'ap-southeast-2',
     *     Name?: string,
     *     OutboundHostName?: string,
     *     RequireEncryption?: bool,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     VoiceConnectorArn?: string,
     *     IntegrationType?: 'CONNECT_CALL_TRANSFER_CONNECTOR'|'CONNECT_ANALYTICS_CONNECTOR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
