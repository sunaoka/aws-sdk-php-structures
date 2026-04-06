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
 * @property string|null $ConfigurationName
 * @property string|null $LoggingLevel
 * @property list<string>|null $GuardrailPolicyArns
 * @property bool|null $UserAuthorizationRequired
 * @property list<Tag>|null $Tags
 * @property string|null $State
 * @property string|null $StateReason
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
     *     ConfigurationName?: string|null,
     *     LoggingLevel?: string|null,
     *     GuardrailPolicyArns?: list<string>|null,
     *     UserAuthorizationRequired?: bool|null,
     *     Tags?: list<Tag>|null,
     *     State?: string|null,
     *     StateReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
