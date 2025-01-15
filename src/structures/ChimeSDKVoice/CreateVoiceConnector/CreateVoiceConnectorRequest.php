<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateVoiceConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'us-east-1'|'us-west-2'|'ca-central-1'|'eu-central-1'|'eu-west-1'|'eu-west-2'|'ap-northeast-2'|'ap-northeast-1'|'ap-southeast-1'|'ap-southeast-2'|null $AwsRegion
 * @property bool $RequireEncryption
 * @property list<Shapes\Tag>|null $Tags
 * @property 'CONNECT_CALL_TRANSFER_CONNECTOR'|'CONNECT_ANALYTICS_CONNECTOR'|null $IntegrationType
 */
class CreateVoiceConnectorRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     AwsRegion?: 'us-east-1'|'us-west-2'|'ca-central-1'|'eu-central-1'|'eu-west-1'|'eu-west-2'|'ap-northeast-2'|'ap-northeast-1'|'ap-southeast-1'|'ap-southeast-2'|null,
     *     RequireEncryption: bool,
     *     Tags?: list<Shapes\Tag>|null,
     *     IntegrationType?: 'CONNECT_CALL_TRANSFER_CONNECTOR'|'CONNECT_ANALYTICS_CONNECTOR'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
