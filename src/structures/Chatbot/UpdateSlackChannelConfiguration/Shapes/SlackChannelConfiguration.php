<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateSlackChannelConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SlackTeamName
 * @property string $SlackTeamId
 * @property string $SlackChannelId
 * @property string $SlackChannelName
 * @property string $ChatConfigurationArn
 * @property string $IamRoleArn
 * @property list<string> $SnsTopicArns
 * @property string $ConfigurationName
 * @property string $LoggingLevel
 * @property list<string> $GuardrailPolicyArns
 * @property bool $UserAuthorizationRequired
 * @property list<Tag> $Tags
 * @property string $State
 * @property string $StateReason
 */
class SlackChannelConfiguration extends Shape
{
    /**
     * @param array{
     *     SlackTeamName: string,
     *     SlackTeamId: string,
     *     SlackChannelId: string,
     *     SlackChannelName: string,
     *     ChatConfigurationArn: string,
     *     IamRoleArn: string,
     *     SnsTopicArns: list<string>,
     *     ConfigurationName?: string,
     *     LoggingLevel?: string,
     *     GuardrailPolicyArns?: list<string>,
     *     UserAuthorizationRequired?: bool,
     *     Tags?: list<Tag>,
     *     State?: string,
     *     StateReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
