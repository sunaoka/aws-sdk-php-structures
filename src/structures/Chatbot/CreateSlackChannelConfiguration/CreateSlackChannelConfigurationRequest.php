<?php

namespace Sunaoka\Aws\Structures\Chatbot\CreateSlackChannelConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SlackTeamId
 * @property string $SlackChannelId
 * @property string|null $SlackChannelName
 * @property list<string>|null $SnsTopicArns
 * @property string $IamRoleArn
 * @property string $ConfigurationName
 * @property string|null $LoggingLevel
 * @property list<string>|null $GuardrailPolicyArns
 * @property bool|null $UserAuthorizationRequired
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateSlackChannelConfigurationRequest extends Request
{
    /**
     * @param array{
     *     SlackTeamId: string,
     *     SlackChannelId: string,
     *     SlackChannelName?: string|null,
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
