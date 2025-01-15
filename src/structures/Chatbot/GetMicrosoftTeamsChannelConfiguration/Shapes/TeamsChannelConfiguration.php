<?php

namespace Sunaoka\Aws\Structures\Chatbot\GetMicrosoftTeamsChannelConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelId
 * @property string|null $ChannelName
 * @property string $TeamId
 * @property string|null $TeamName
 * @property string $TenantId
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
class TeamsChannelConfiguration extends Shape
{
    /**
     * @param array{
     *     ChannelId: string,
     *     ChannelName?: string|null,
     *     TeamId: string,
     *     TeamName?: string|null,
     *     TenantId: string,
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
