<?php

namespace Sunaoka\Aws\Structures\Chatbot\CreateMicrosoftTeamsChannelConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelId
 * @property string $ChannelName
 * @property string $TeamId
 * @property string $TeamName
 * @property string $TenantId
 * @property list<string> $SnsTopicArns
 * @property string $IamRoleArn
 * @property string $ConfigurationName
 * @property string $LoggingLevel
 * @property list<string> $GuardrailPolicyArns
 * @property bool $UserAuthorizationRequired
 * @property list<Shapes\Tag> $Tags
 */
class CreateMicrosoftTeamsChannelConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ChannelId: string,
     *     ChannelName?: string,
     *     TeamId: string,
     *     TeamName?: string,
     *     TenantId: string,
     *     SnsTopicArns?: list<string>,
     *     IamRoleArn: string,
     *     ConfigurationName: string,
     *     LoggingLevel?: string,
     *     GuardrailPolicyArns?: list<string>,
     *     UserAuthorizationRequired?: bool,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
