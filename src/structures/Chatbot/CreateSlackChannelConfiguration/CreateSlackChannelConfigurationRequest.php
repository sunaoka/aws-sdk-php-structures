<?php

namespace Sunaoka\Aws\Structures\Chatbot\CreateSlackChannelConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SlackTeamId
 * @property string $SlackChannelId
 * @property string $SlackChannelName
 * @property list<string> $SnsTopicArns
 * @property string $IamRoleArn
 * @property string $ConfigurationName
 * @property string $LoggingLevel
 * @property list<string> $GuardrailPolicyArns
 * @property bool $UserAuthorizationRequired
 * @property list<Shapes\Tag> $Tags
 */
class CreateSlackChannelConfigurationRequest extends Request
{
    /**
     * @param array{
     *     SlackTeamId: string,
     *     SlackChannelId: string,
     *     SlackChannelName?: string,
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
