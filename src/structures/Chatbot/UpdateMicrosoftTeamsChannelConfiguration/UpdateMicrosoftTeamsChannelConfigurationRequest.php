<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateMicrosoftTeamsChannelConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChatConfigurationArn
 * @property string $ChannelId
 * @property string $ChannelName
 * @property list<string> $SnsTopicArns
 * @property string $IamRoleArn
 * @property string $LoggingLevel
 * @property list<string> $GuardrailPolicyArns
 * @property bool $UserAuthorizationRequired
 */
class UpdateMicrosoftTeamsChannelConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ChatConfigurationArn: string,
     *     ChannelId: string,
     *     ChannelName?: string,
     *     SnsTopicArns?: list<string>,
     *     IamRoleArn?: string,
     *     LoggingLevel?: string,
     *     GuardrailPolicyArns?: list<string>,
     *     UserAuthorizationRequired?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
