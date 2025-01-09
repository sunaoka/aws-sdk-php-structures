<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateChimeWebhookConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChatConfigurationArn
 * @property string $WebhookDescription
 * @property string $WebhookUrl
 * @property list<string> $SnsTopicArns
 * @property string $IamRoleArn
 * @property string $LoggingLevel
 */
class UpdateChimeWebhookConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ChatConfigurationArn: string,
     *     WebhookDescription?: string,
     *     WebhookUrl?: string,
     *     SnsTopicArns?: list<string>,
     *     IamRoleArn?: string,
     *     LoggingLevel?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
