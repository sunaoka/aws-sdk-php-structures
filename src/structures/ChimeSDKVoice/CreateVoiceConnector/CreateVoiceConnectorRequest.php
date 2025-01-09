<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateVoiceConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'us-east-1'|'us-west-2'|'ca-central-1'|'eu-central-1'|'eu-west-1'|'eu-west-2'|'ap-northeast-2'|'ap-northeast-1'|'ap-southeast-1'|'ap-southeast-2' $AwsRegion
 * @property bool $RequireEncryption
 * @property list<Shapes\Tag> $Tags
 * @property 'CONNECT_CALL_TRANSFER_CONNECTOR'|'CONNECT_ANALYTICS_CONNECTOR' $IntegrationType
 */
class CreateVoiceConnectorRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     AwsRegion?: 'us-east-1'|'us-west-2'|'ca-central-1'|'eu-central-1'|'eu-west-1'|'eu-west-2'|'ap-northeast-2'|'ap-northeast-1'|'ap-southeast-1'|'ap-southeast-2',
     *     RequireEncryption: bool,
     *     Tags?: list<Shapes\Tag>,
     *     IntegrationType?: 'CONNECT_CALL_TRANSFER_CONNECTOR'|'CONNECT_ANALYTICS_CONNECTOR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
