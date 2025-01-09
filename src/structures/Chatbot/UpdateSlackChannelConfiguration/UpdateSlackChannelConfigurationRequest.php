<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateSlackChannelConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChatConfigurationArn
 * @property string $SlackChannelId
 * @property string $SlackChannelName
 * @property list<string> $SnsTopicArns
 * @property string $IamRoleArn
 * @property string $LoggingLevel
 * @property list<string> $GuardrailPolicyArns
 * @property bool $UserAuthorizationRequired
 */
class UpdateSlackChannelConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ChatConfigurationArn: string,
     *     SlackChannelId: string,
     *     SlackChannelName?: string,
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
