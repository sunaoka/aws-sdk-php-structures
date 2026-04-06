<?php

namespace Sunaoka\Aws\Structures\Chatbot\CreateMicrosoftTeamsChannelConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelId
 * @property string|null $ChannelName
 * @property string $TeamId
 * @property string|null $TeamName
 * @property string $TenantId
 * @property list<string>|null $SnsTopicArns
 * @property string $IamRoleArn
 * @property string $ConfigurationName
 * @property string|null $LoggingLevel
 * @property list<string>|null $GuardrailPolicyArns
 * @property bool|null $UserAuthorizationRequired
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateMicrosoftTeamsChannelConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ChannelId: string,
     *     ChannelName?: string|null,
     *     TeamId: string,
     *     TeamName?: string|null,
     *     TenantId: string,
     *     SnsTopicArns?: list<string>|null,
     *     IamRoleArn: string,
     *     ConfigurationName: string,
     *     LoggingLevel?: string|null,
     *     GuardrailPolicyArns?: list<string>|null,
     *     UserAuthorizationRequired?: bool|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
