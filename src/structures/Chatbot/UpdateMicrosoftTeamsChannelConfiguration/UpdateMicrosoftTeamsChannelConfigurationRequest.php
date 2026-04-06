<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateMicrosoftTeamsChannelConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChatConfigurationArn
 * @property string $ChannelId
 * @property string|null $ChannelName
 * @property list<string>|null $SnsTopicArns
 * @property string|null $IamRoleArn
 * @property string|null $LoggingLevel
 * @property list<string>|null $GuardrailPolicyArns
 * @property bool|null $UserAuthorizationRequired
 */
class UpdateMicrosoftTeamsChannelConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ChatConfigurationArn: string,
     *     ChannelId: string,
     *     ChannelName?: string|null,
     *     SnsTopicArns?: list<string>|null,
     *     IamRoleArn?: string|null,
     *     LoggingLevel?: string|null,
     *     GuardrailPolicyArns?: list<string>|null,
     *     UserAuthorizationRequired?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
