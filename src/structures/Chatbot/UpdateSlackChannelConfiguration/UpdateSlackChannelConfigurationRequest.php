<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateSlackChannelConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChatConfigurationArn
 * @property string $SlackChannelId
 * @property string|null $SlackChannelName
 * @property list<string>|null $SnsTopicArns
 * @property string|null $IamRoleArn
 * @property string|null $LoggingLevel
 * @property list<string>|null $GuardrailPolicyArns
 * @property bool|null $UserAuthorizationRequired
 */
class UpdateSlackChannelConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ChatConfigurationArn: string,
     *     SlackChannelId: string,
     *     SlackChannelName?: string|null,
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
