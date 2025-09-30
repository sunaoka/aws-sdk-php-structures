<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListVoiceConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VoiceConnectorId
 * @property 'us-east-1'|'us-west-2'|'ca-central-1'|'eu-central-1'|'eu-west-1'|'eu-west-2'|'ap-northeast-2'|'ap-northeast-1'|'ap-southeast-1'|'ap-southeast-2'|null $AwsRegion
 * @property string|null $Name
 * @property string|null $OutboundHostName
 * @property bool|null $RequireEncryption
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 * @property string|null $VoiceConnectorArn
 * @property 'CONNECT_CALL_TRANSFER_CONNECTOR'|'CONNECT_ANALYTICS_CONNECTOR'|null $IntegrationType
 * @property 'IPV4_ONLY'|'DUAL_STACK'|null $NetworkType
 */
class VoiceConnector extends Shape
{
    /**
     * @param array{
     *     VoiceConnectorId?: string|null,
     *     AwsRegion?: 'us-east-1'|'us-west-2'|'ca-central-1'|'eu-central-1'|'eu-west-1'|'eu-west-2'|'ap-northeast-2'|'ap-northeast-1'|'ap-southeast-1'|'ap-southeast-2'|null,
     *     Name?: string|null,
     *     OutboundHostName?: string|null,
     *     RequireEncryption?: bool|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     VoiceConnectorArn?: string|null,
     *     IntegrationType?: 'CONNECT_CALL_TRANSFER_CONNECTOR'|'CONNECT_ANALYTICS_CONNECTOR'|null,
     *     NetworkType?: 'IPV4_ONLY'|'DUAL_STACK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
