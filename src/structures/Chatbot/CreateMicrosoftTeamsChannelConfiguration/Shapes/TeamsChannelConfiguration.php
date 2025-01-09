<?php

namespace Sunaoka\Aws\Structures\Chatbot\CreateMicrosoftTeamsChannelConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelId
 * @property string $ChannelName
 * @property string $TeamId
 * @property string $TeamName
 * @property string $TenantId
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
class TeamsChannelConfiguration extends Shape
{
    /**
     * @param array{
     *     ChannelId: string,
     *     ChannelName?: string,
     *     TeamId: string,
     *     TeamName?: string,
     *     TenantId: string,
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
